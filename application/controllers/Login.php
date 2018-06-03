<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_Login');
	}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|required|callback_proses');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			redirect('Home');
		}
	}
	public function proses($username)
	{
		$password = md5($this->input->post('password'));
		$aut = $this->m_Login->autentifikasi($username,$password);
		if($aut['num_rows'] == 1){
			$this->session->set_userdata($aut['result']);
			return true;
		}else{
			$this->form_validation->set_message('proses','Username and Password tidak valid');
			return false;
		}
	}
}
