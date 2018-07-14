<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghuni extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penghuni');
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if (!$this->acl->is_public($current_controller)) {
				if (!$this->acl->is_allowed($current_controller,$data['level'])) {
					echo '<script>alert("Tidak Dapat Akses")</script>';
					redirect('Login/logout','refresh');
				}
			}
		}else{
			echo '<script>alert("Login Dahulu")</script>';
			redirect('Login');
		}
	}

	public function index()
	{
		$data['penghuni'] = $this->m_penghuni->select();
		$this->load->view('penghuni/show',$data);
	}

	public function insert()
	{
		$data['kamar'] = $this->m_penghuni->select_kamar();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama',"Nama penghuni",'required');
		$this->form_validation->set_rules('alamat',"Alamat",'required');
		$this->form_validation->set_rules('notelp',"No Tlp",'required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_value('username', "Username",'required');
		$this->form_validation->set_rules('password','password','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('penghuni/insert',$data);
		} else {
			$this->m_penghuni->insert();
			redirect('penghuni');
		}
	}
	public function update($id)
	{
		$data['kamar'] = $this->m_penghuni->select_kamar();
		$data['penghuni_row'] = $this->m_penghuni->select_id($id);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama',"Nama penghuni",'required');
		$this->form_validation->set_rules('alamat',"Alamat",'required');
		$this->form_validation->set_rules('notelp',"No Tlp",'required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_value('username', "Username",'required');
		$this->form_validation->set_rules('password','password','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('penghuni/update',$data);
		} else {
			$this->m_penghuni->update($id);
			redirect('penghuni');
		}
	}
	public function update_keluar($id)
	{
		$this->m_penghuni->keluar_penghuni($id);
		redirect('penghuni','refresh');
	}
	public function delete($id)
	{
		$this->m_penghuni->delete($id);
		redirect('penghuni');
	}

}

/* End of file Penghuni.php */
/* Location: ./application/controllers/Penghuni.php */