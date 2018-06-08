<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_Login_admin');
	}

	public function index()
	{
		$data['login_admin'] = $this->m_Login_admin->select();
		$this->load->view('login_admin/show',$data);
	}

	public function insert()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username',"Username",'required');
		$this->form_validation->set_rules('password',"Password",'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login_admin/insert');
		} else {
			$this->m_Login_admin->insert();
			redirect('login_admin');
		}
	}
	public function update($id)
	{
		$data['login_admin_row'] = $this->m_Login_admin->select_id($id);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username',"Username",'required');
		$this->form_validation->set_rules('password',"Password",'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login_admin/update',$data);
		} else {
			$this->m_Login_admin->update($id);
			redirect('login_admin');
		}
	}
	public function delete($id)
	{
		$this->m_Login_admin->delete($id);
		redirect('login_admin');
	}
}
