<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_Kamar extends CI_Model {

	public function select()
	{
		$this->db->select("kamar.*,penghuni_kos.nama");
		$this->db->from("kamar");
		$this->db->join("penghuni_kos","kamar.id=penghuni_kos.fk_id_kamar","left");
		return $this->db->get()->result_array();
	}

	public function select_id($id)
	{
		return $this->db->where('id',$id)->get('kamar')->result_array()[0];
	}
	public function insert($upload_name)
	{
		$data = $this->input->post();
		$data['image'] = $upload_name;
		$this->db->insert('kamar',$data);
	}

	public function update($id,$upload_name=false)
	{
		$data = $this->input->post();
		if($upload_name){
			$data['image'] = $upload_name;
		}
		$this->db->where('id',$id);
		$this->db->update('kamar',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('kamar');
	}
	public function upload(){
        $config['upload_path'] = './assets/img/kamar/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('image')){
            $return = array('result' => 'success', 'file' => $this->upload->data(),
            'error' => '');
            return $return;
        }else{
            $return = array('result' => 'failed', 'file' => '', 'error' =>
            $this->upload->display_errors());
            return $return;
        }
    }
}