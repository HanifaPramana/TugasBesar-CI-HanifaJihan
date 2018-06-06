<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_Kamar');
	}

	public function index()
	{
		$data['kamar'] = $this->m_Kamar->select();
		$this->load->view('kamar/show',$data);
	}

	public function insert()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('no_kamar',"Nomor Kamar",'required');
		$this->form_validation->set_rules('fasilitas',"Fasilitas",'required');
		$this->form_validation->set_rules('biaya_per_bulan',"Biaya perbulan",'required|numeric');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('kamar/insert');
		} else {
			$this->m_Kamar->insert();
			redirect('Kamar');
		}
	}
	public function update($id)
	{
		$data['kamar_row'] = $this->m_Kamar->select_id($id);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('no_kamar',"Nomor Kamar",'required');
		$this->form_validation->set_rules('fasilitas',"Fasilitas",'required');
		$this->form_validation->set_rules('biaya_per_bulan',"Biaya perbulan",'required|numeric');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('kamar/update',$data);
		} else {
			$this->m_Kamar->update($id);
			redirect('Kamar');
		}
	}
	public function delete($id)
	{
		$this->m_Kamar->delete($id);
		redirect('Kamar');
	}
}
