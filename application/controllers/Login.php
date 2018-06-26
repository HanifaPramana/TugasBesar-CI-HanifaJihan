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
			redirect('Kamar');
		}
	}
	public function proses($username)
	{
		$password = md5($this->input->post('password'));
		$validasi = $this->db->where('username',$username)->where('password',$password)->get('login_admin');
		if($validasi->num_rows() == 1){
			$data = $validasi->result_array()[0];
			$userdata = array(
				'id' => $data['id'],
				'username' => $data['username'],
				'level' => $data['level']
			);
			$this->session->set_userdata('logged_in',$userdata);
			return true;
		}else{
			$this->form_validation->set_message('proses','Username and Password tidak valid');
			return false;
		}
	}
	public function penghuni()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|required|callback_penghuniproses');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login_penghuni');
		} else {
			redirect('Home');
		}
	}
	public function penghuniproses($username)
	{
		$password = md5($this->input->post('password'));
		$validasi = $this->db->where('username',$username)->where('password',$password)->get('penghuni_kos');
		if($validasi->num_rows() == 1){
			$data = $validasi->result_array()[0];
			$userdata = array(
				'id' => $data['id'],
				'nama' => $data['nama'],
				'email' => $data['email'],
				'username' => $data['username'],
				'level' => '3'
			);
			$this->session->set_userdata('logged_in',$userdata);
			return true;
		}else{
			$this->form_validation->set_message('penghuniproses','Username and Password tidak valid');
			return false;
		}
	}
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|required|is_unique[login_admin.username]');
		$this->form_validation->set_rules('password','Password','required|matches[re-password]');
		$this->form_validation->set_rules('re-password','re-Password','required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		} else {
			$this->m_Login->register();
			redirect('Login');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('Home','refresh');
	}
}
