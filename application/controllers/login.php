<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->load->helper('text');

		$this->load->helper('url','form');
		$this->load->library('form_validation');
		//$this->load->view('login_view');
		

		//pkl 
		$this->load->model('tugasbesarci_model');
		$data['tugasbesarci_builder_object']=$this->tugasbesarci_model->gettugasbesarciBuilderObject();
		$data['tugasbesarci_builder_object1']=$this->tugasbesarci_model->gettugasbesarciBuilderObject1();
		$this->load->view('tugasbesarci/index_viewer_default',$data);




		// if ($this->session->userdata('level')=="admin") 
		// {
		// 	redirect('tugasbesarci_admin');
		// 	//$this->load->view('login_view');
		// }
		// else if ($this->session->userdata('level')=="member")
		// {
		// 	redirect('tugasbesarci');
		// }

	}

	public function masuk_login()
	{

		$this->load->helper('text');

		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->view('login_view');
	}
	


	public function cek_login() {
$this->load->helper('url','form');
		$this->load->library('form_validation');

		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('user'); // load model_user
		$hasil = $this->user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) 
			{
				$sess_data['logged_in'] = 'Sudah Loggin';
				//$sess_data['uid'] = $sess->uid;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				//$this->session->set_userdata($sess_data);
			}
			// if ($this->session->userdata('level')=='admin') {
			 	redirect('tugasbesarci_admin/viewer');
			// }
			// elseif ($this->session->userdata('level')=='member') {
			// 	redirect('tugasbesarci/viewer');
			// }		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}



	public function logout()
	{
		// $this->session->unset_userdata('logged_in');
		// $this->session->sess_destroy();
		// redirect('login','refresh');
		$this->session->unset_userdata('admin');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}

	public function create()
{

		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'trim|required|callback_cekDbInsert');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->load->model('user');	
		if($this->form_validation->run()==FALSE){

			$this->load->view('tugasbesarci/tambah_user_view');

		}else{
			$this->user->insertUser();
			$this->load->view('tugasbesarci/tambah_user_sukses');
		} 
	}
	public function cekDbInsert()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('user');
		$username = $this->input->post('username');
		$result = $this->user->cekInsert($username);
		if($result){
			$this->load->view('tugasbesarci/tambah_user_gagal');
			return false;
		}
		else{
			return true;
		}
	} 

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */


	