<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_Kamar');
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
				$this->m_Kamar->update($id);
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
