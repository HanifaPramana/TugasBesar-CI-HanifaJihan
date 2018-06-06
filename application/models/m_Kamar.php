<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_Kamar extends CI_Model {

	public function select()
	{
		return $this->db->get('kamar')->result_array();
	}

	public function select_id($id)
	{
		return $this->db->where('id',$id)->get('kamar')->result_array()[0];
	}
	public function insert()
	{
		$data = $this->input->post();
		$this->db->insert('kamar',$data);
	}

	public function update($id)
	{
		$data = $this->input->post();
		$this->db->where('id',$id);
		$this->db->update('kamar',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('kamar');
	}
}