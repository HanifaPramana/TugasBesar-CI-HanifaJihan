<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_Penghuni extends CI_Model {

	public function select()
	{
		return $this->db->get('penghuni_kos')->result_array();
	}

	public function select_id($id)
	{
		return $this->db->where('id',$id)->get('penghuni_kos')->result_array()[0];
	}
	public function insert()
	{
		$data = $this->input->post();
		$this->db->insert('penghuni_kos',$data);
	}

	public function update($id)
	{
		$data = $this->input->post();
		$this->db->where('id',$id);
		$this->db->update('penghuni_kos',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('penghuni_kos');
	}
}