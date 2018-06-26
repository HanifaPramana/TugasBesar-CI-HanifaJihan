<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_Pembayaran');
		$this->load->library('pdf');
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
		$data['list_data'] = $this->m_Pembayaran->get_data();
		$this->load->view('pembayaran/show',$data);
	}
	function generate_to_pdf(){
 $data['data']=$this->m_Pembayaran->get_data();
$this->pdf->load_view('pembayaran/print',$data);
$this->pdf->render();
$this->pdf->stream("laporan.pdf");
}

	public function set_lunas($id)
	{
		$this->m_Pembayaran->set_lunas($id);
		redirect('Pembayaran','refresh');
	}
}