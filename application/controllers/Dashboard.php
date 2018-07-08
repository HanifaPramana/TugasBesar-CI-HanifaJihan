<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['kamar'] = $this->db->get('kamar')->num_rows();
		$data['penghuni_kos'] = $this->db->where('status !=',1)->get('penghuni_kos')->num_rows();

		$this->load->view('dashboard',$data);
	}
}
