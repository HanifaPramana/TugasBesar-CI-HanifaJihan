<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghuni extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penghuni');
	}

	public function index()
	{
		$data['penghuni'] = $this->m_penghuni->select();
		$this->load->view('penghuni/show',$data);
	}

	public function insert()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama',"Nama penghuni",'required');
		$this->form_validation->set_rules('alamat',"Alamat",'required');
		$this->form_validation->set_rules('notelp',"No Tlp",'required');
		$this->form_validation->set_value('username', "Username",'required');
		$this->form_validation->set_value('status',"Status",'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('penghuni/insert');
		} else {
			$this->m_penghuni->insert();
			redirect('penghuni');
		}
	}
	public function update($id)
	{
		$data['penghuni_row'] = $this->m_penghuni->select_id($id);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama',"Nama penghuni",'required');
		$this->form_validation->set_rules('alamat',"Alamat",'required');
		$this->form_validation->set_rules('notelp',"No Tlp",'required');
		$this->form_validation->set_value('username', "Username",'required');
		$this->form_validation->set_value('status',"Status",'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('penghuni/update',$data);
		} else {
			$this->m_penghuni->update($id);
			redirect('penghuni');
		}
	}
	public function delete($id)
	{
		$this->m_penghuni->delete($id);
		redirect('penghuni');
	}

}

/* End of file Penghuni.php */
/* Location: ./application/controllers/Penghuni.php */