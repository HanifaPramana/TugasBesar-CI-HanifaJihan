<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pembayaran extends CI_Model {

	public function get_data()
	{
		$this->db->select('pembayaran.*,(select nama from penghuni_kos where id=pembayaran.fk_id_penghuni) as nama_penghuni');
		return $this->db->get('pembayaran')->result();
	}
	public function pembayaran($id)
	{
		$this->db->select('pembayaran.*,(select biaya_per_bulan from kamar where id = (select fk_id_kamar from penghuni_kos where id=pembayaran.fk_id_penghuni)) as harga_sewa');
		$this->db->where('id',$id);
		return $this->db->get('pembayaran')->result()[0];
	}
	public function set_lunas($id)
	{
		$this->db->where('id',$id);
		$set['status'] =1;
		$this->db->update('pembayaran',$set);
	}
	public function get_penghuni($id)
	{
		$this->db->select('pembayaran.*,(select biaya_per_bulan from kamar where id = (select fk_id_kamar from penghuni_kos where id=pembayaran.fk_id_penghuni)) as harga_sewa');
		$this->db->where('fk_id_penghuni',$id);
		return $this->db->get('pembayaran')->result();
	}
	public function get_num_mount($id)
	{
		$this->db->select("TIMESTAMPDIFF(MONTH, (select tanggal_masuk from penghuni_kos where id = '".$id."'), NOW()) as lama_tinggal, (select sum(jumlah_bulan) from pembayaran where status = 1 AND fk_id_penghuni = '".$id." ') as jumlah_lunas");
		$this->db->where('id',$id);
		return $this->db->get('penghuni_kos')->result()[0];
	}	
	public function bayar($id)
	{
		$data = array(
			'no_pembayaran' => $this->gen_no_pembayaran(),
			'kode_token' => $this->gen_token(),
			'tanggal' => date('Y-m-d'),
			'jumlah_bulan' => $this->input->post('jumlah_bulan'),
			'status' => 0,
			'fk_id_penghuni' => $id
		);
		$this->db->insert('pembayaran',$data);

		return $this->db->insert_id();
	}
	public function gen_no_pembayaran()
	{
		$query = $this->db->query("select * from pembayaran order by no_pembayaran desc limit 1");
		if ($query->num_rows() > 0) {
			$result = $query->result();
			$row = $result[0];
			$id = (int) substr($row->no_pembayaran, 3,5)+1;
			$newid = substr('00000'.($id), -5);
			return 'PMB'.$newid;
		}else{
			return 'PMB00001';
		}
	}
	public function gen_token()
	{
		return $no = rand(10000,99999);
	}
}

/* End of file m_Pembayaran.php */
/* Location: ./application/models/m_Pembayaran.php */ ?>