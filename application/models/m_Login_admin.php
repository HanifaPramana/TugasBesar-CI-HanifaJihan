<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_Login_admin extends CI_Model {

	public function select()
	{
		return $this->db->get('login_admin')->result_array();
	}

	public function select_id($id)
	{
		return $this->db->where('id',$id)->get('login_admin')->result_array()[0];
	}
	public function insert()
	{
		$data = $this->input->post();
		$data['password']=md5($data['password']);
		$this->db->insert('login_admin',$data);
	}

	public function update($id)
	{
		$data = $this->input->post();
		$data['password']=md5($data['password']);
		$this->db->where('id',$id);
		$this->db->update('login_admin',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('login_admin');
	}
}