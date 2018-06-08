<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_Login_admin extends CI_Model {

	public function getData()
		{
			$query = $this->db->get("login_admin");
			return $query->result_array();
		}
		public function insert()
		{
			$object=$this->input->post();
			$object['password'] = md5($object['password']);
			$this->db->insert('login_admin', $object);

		}

		public function get($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('login_admin');
			return $query->result();
		}

		public function updateById($id)
		{
			$object=$this->input->post();
			$object['password'] = md5($object['password']);
			$this->db->where('id', $id);
			$this->db->update('login_admin', $data);
		}
		// public function delete($id) { 
  //        if ($this->db->delete("login_admin", "id = ".$id)) { 
  //           return true; 
  //        } 
		public function getAll()
		
    	{
        	$query = $this->db->get('login_admin');
        	if($query->num_rows()>0){
            return $query->result();
        }
    }
    

    	public function save()
    	{
        	$data= $this->input->post();
			$data['password'] = md5($data['password']);
        	$this->db->insert('login_admin', $data);
    	}

    	public function delete($id)
    	{
        	$this->db->where('id', $id);
        	$this->db->delete('login_admin');
    	}

    	public function update()
    	{
        	$data= $this->input->post();
        	$data['password'] = md5($data['password']);
        	$id= $this->input->post('id');
        	$this->db->where('id', $id);
        	$this->db->update('login_admin',$data);
    	}
}