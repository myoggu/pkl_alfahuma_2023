<?php 
defined('BASEPATH') OR exit('No direct script accsess allowed');

class cetak extends Ci_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cetak_model');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['berita']=$this->cetak_model->view_row();
		$this->load->view('preview', $data);
	}
//punya nya admin tambahi session
	public function index_admin()
	{
		$data['berita']=$this->cetak_model->view_row();
		$this->load->view('preview_admin', $data);
	}


	public function cetakPdf()
	{
		$data['berita']=$this->cetak_model->view_row();
		$this->load->view('print', $data);
		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();

		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("persyaratan.pdf");
		unset($html);
		unset($dompdf);

	}

}