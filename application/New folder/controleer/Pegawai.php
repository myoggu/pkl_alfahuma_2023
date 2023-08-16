<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Pegawaia extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->model('pegawai_model');
		$data['data_pegawai']=$this->pegawai_model->getpegawai();
			$this->load->view('pegawai/home',$data);
	}


	public function create(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','trim|required');


		$this->load->model('pegawai_model');


		if($this->form_validation->run()==FALSE) 
		{
			# code...
			$this->load->view('pegawai/tambah_pegawai_view');
		}
		else
		{
			$this->pegawai_model->insertPegawai();
			$this->load->view('pegawai/tambah_pegawai_sukses');
		}
	}
	
	public function update()
	{
		
	}
	public function delete()
	{
		# code...
	}
}
 ?>