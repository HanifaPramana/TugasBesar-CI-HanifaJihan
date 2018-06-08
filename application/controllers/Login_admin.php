<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {

	public function index()
    {
       $this->load->view('login_admin/show');
    }

    public function gridDinamis()
    {
        $this->load->view('login_admin/show');
    }

    public function getAll()
    {
        $this->load->model('m_Login_admin');
        $result = $this->m_Login_admin->getAll(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function add(){
        $this->load->model('m_Login_admin');
        $this->m_Login_admin->save();
    }

    public function delete()
    {
        $this->load->model('m_Login_admin');
        $id = $this->input->post('id'); 
        $this->m_Login_admin->delete($id);
    }

    public function update()
    {
        $this->load->model('m_Login_admin');
        $this->m_Login_admin->update();
    }
}
