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
			$upload = $this->m_Kamar->upload();
			if($upload['result'] == "success"){ 
				$this->m_Kamar->insert($upload['file']['file_name']);
				redirect('Kamar');
			}else{
				$data['message'] = $upload['error'];
				$this->load->view('kamar/insert',$data); 
			}
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
			if ($_FILES['image']['name'] == "")
			{
				$this->m_Kamar->updateData($id);
				redirect('kamar');
			}
			else
			{
				$upload = $this->m_Kamar->upload();
				if($upload['result'] == "success"){ 
					$this->m_Kamar->update($id,$upload['file']['file_name']);
					redirect('kamar');
				}else{ 
					$data['error_upload'] = $upload['error'];
					$this->load->view('kamar/update',$data);
				}
			}
		}
	}
	public function delete($id)
	{
		$this->m_Kamar->delete($id);
		redirect('Kamar');
	}
}
