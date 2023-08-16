<?php
//session_start();
class C_admin extends CI_Controller {
public function __construct()
	{

		parent::__construct();
	
		$this->load->helper('text');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('wisata/home', $data);

			if ($this->session->userdata('username')=="") 
		{
			redirect('login');
			//$this->load->view('login_view');
		}
		else if($this->session->userdata('level')=="admin") 
		{
			redirect('tugasbesarci');
			//$this->load->view('login_view');
		}


	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}
?>