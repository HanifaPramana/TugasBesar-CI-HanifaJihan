<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_Penghuni extends CI_Model {

	public function select()
	{
		$this->db->select('penghuni_kos.*,kamar.no_kamar');
		$this->db->from('penghuni_kos');
		$this->db->join('kamar','penghuni_kos.fk_id_kamar=kamar.id','left');
		return $this->db->get()->result_array();
	}

	public function select_id($id)
	{
		return $this->db->where('id',$id)->get('penghuni_kos')->result_array()[0];
	}
	public function select_kamar()
	{
		$this->db->select('kamar.*');
		$this->db->from('kamar');
		$this->db->join('penghuni_kos','kamar.id=penghuni_kos.fk_id_kamar','left');
		$this->db->where('penghuni_kos.status',null);
		$this->db->or_where('penghuni_kos.status',0);
		return $this->db->get()->result_array();
	}
	public function insert()
	{
		$data = $this->input->post();
		$data['password'] = md5($data['password']);
		$data['tanggal_masuk'] = date('Y-m-d');
		$this->db->insert('penghuni_kos',$data);
	}

	public function update($id)
	{
		$data = $this->input->post();
		$data['password'] = md5($data['password']);
		$this->db->where('id',$id);
		$this->db->update('penghuni_kos',$data);
	}
	public function keluar_penghuni($id)
	{
		$this->db->where('id',$id);
		$data['tanggal_keluar'] = date('Y-m-d');
		$data['status'] = 0;
		$data['fk_id_kamar'] = null;
		$this->db->update('penghuni_kos',$data);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('penghuni_kos');
	}
}