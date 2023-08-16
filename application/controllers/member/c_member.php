<?php
//session_start();
class C_member extends CI_Controller {

	public function __construct() {
	parent::__construct();
			// if ($this->session->userdata('username')=="") 
			// {
			// 	//redirect('login');
			// 	$this->load->view('login_view');
			// }
		$this->load->helper('text');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('member/index', $data);

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