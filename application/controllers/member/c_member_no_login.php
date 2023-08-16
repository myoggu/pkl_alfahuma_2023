<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class C_member_no_login extends CI_Controller {

	public function __construct() {
	parent::__construct();
			
		$this->load->helper('text');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}
	public function index() 
	{
			$this->load->model('tugasbesarci_model');
			$data['tugasbesarci_builder_object']=$this->tugasbesarci_model->gettugasbesarciBuilderObject();
			$data['tugasbesarci_builder_object1']=$this->tugasbesarci_model->gettugasbesarciBuilderObject1();
	
			$this->load->view('tugasbesarci/index_viewer',$data);

	}

	
}
