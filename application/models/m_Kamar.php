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