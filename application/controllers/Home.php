<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['kamar'] = $this->db->get('kamar')->result();
		$this->load->view('user/home',$data);
	}
	public function admin()
	{
		$this->load->view('home');
	}
	public function penghuni()
	{
		$id_penghuni = $this->session->userdata('logged_in')['id'];
		$this->load->model('m_Pembayaran');
		$data['list'] = $this->m_Pembayaran->get_num_mount($id_penghuni);
		$data['data_pembayaran'] = $this->m_Pembayaran->get_penghuni($id_penghuni);
		$this->load->view('user/penghuni',$data);
	}
	public function coba()
	{
		$this->load->model('m_Pembayaran');
		echo $this->m_Pembayaran->gen_token();
	}
	public function bayar()
	{
		$id_penghuni = $this->session->userdata('logged_in')['id'];
		$this->load->model('m_Pembayaran');
		$id_pembayaran = $this->m_Pembayaran->bayar($id_penghuni);
		redirect('Home/pembayaran/'.$id_pembayaran,'refresh');
	}
	public function pembayaran($id)
	{
		$this->load->model('m_Pembayaran');
		$data['pembayaran'] = $this->m_Pembayaran->pembayaran($id);
		$this->load->view('user/pembayaran',$data);
	}
	public function about()
	{
		$this->load->view('user/about');
	}
	public function contact()
	{
		$this->load->view('user/contact');
	}
}
