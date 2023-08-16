<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/

class tugasbesarci extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tugasbesarci_model');
		//$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');

//buat session nya
		// if ($this->session->userdata('username')=="") 
		// {
		// 	redirect('login');
		
		// }
		// else if($this->session->userdata('level')=="admin") 
		// {
		// 	redirect('tugasbesarci_admin');
	
		// }
		
	}

	public function index()
	{

		$this->load->model('tugasbesarci_model');
		$data['tugasbesarci_builder_object']=$this->tugasbesarci_model->gettugasbesarciBuilderObject();
		$data['tugasbesarci_builder_object1']=$this->tugasbesarci_model->gettugasbesarciBuilderObject1();		
		$this->load->view('tugasbesarci/index_viewer',$data);
			


	
	}

	public function create(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('Judul','Judul','trim|required');
		$this->form_validation->set_rules('Isi','Isi','trim|required');
		$this->form_validation->set_rules('Tanggal_dibuat','Tanggal_dibuat','trim|required');
		

		$this->load->model('tugasbesarci_model');


		if($this->form_validation->run()==FALSE) 
		{
			# code...
			$this->load->view('tugasbesarci/tambah_tugasbesarci_view');
		}
		else
		{
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '1000000000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('tugasbesarci/tambah_tugasbesarci_view',$error);
				
			}
				else{
				
				$image_data = $this->upload->data();

				$configer = array (
						'image_library' => 'gd2',
						'source_image' => $image_data['full_path'],
						'maintain_ratio' => TRUE,
						'width' => 250,
						'height' => 250,
				);	
				$this->load->library('image_lib', $config);

				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

				$this->tugasbesarci_model->inserttugasbesarci();
				$this->load->view('tugasbesarci/tambah_tugasbesarci_sukses');}}}
	
	

	
	public function datatable()
		{
	
		$data['tugasbesarci_builder_array']=$this->tugasbesarci_model->gettugasbesarciBuilderArray();
		$this->load->view('tugasbesarci/tugasbesarci_datatable',$data);
		}


	public function data_tugasbesarci()
		{
			$this->load->model('tugasbesarci_model');
		$data['tugasbesarci_builder_object']=$this->tugasbesarci_model->gettugasbesarciBuilderObject();
			$this->load->view('tugasbesarci/data_tugasbesarci',$data);
		}
	public function about()
		{
			
			$this->load->view('tugasbesarci/about');
		}
	public function contact()
		{
			
			$this->load->view('tugasbesarci/contact');
		}
	
		

	public function home()
		{
			
			
			$this->load->model('tugasbesarci_model');
			$data['tugasbesarci_builder_array']=$this->tugasbesarci_model->gettugasbesarciBuilderArray();

			$this->load->view('tugasbesarci/home',$data);
		}

	
	public function viewer()	
		{


			$this->load->model('tugasbesarci_model');
			$data['tugasbesarci_builder_object']=$this->tugasbesarci_model->gettugasbesarciBuilderObject();
			$data['tugasbesarci_builder_object1']=$this->tugasbesarci_model->gettugasbesarciBuilderObject1();
	
			//$this->load->view('tugasbesarci/index_viewer',$data);
			$this->load->view('tugasbesarci/index_viewer_default',$data);
		}
	public function data_server( )
		{
			$this->load->library('Datatables');
			$this->datatables
				->select('id,Judul,Isi,Tanggal_dibuat,foto,status')
				->from('berita');
				echo $this->datatables->generate();
		}
	public function Tampil_berita($id)
	{
		$this->form_validation->set_rules('Judul','Judul','trim|required');
		$this->form_validation->set_rules('Isi','Isi','trim|required');
		$this->form_validation->set_rules('Tanggal_dibuat','Tanggal_dibuat','trim|required');
		
		$this->load->model('tugasbesarci_model');
		$data['berita']=$this->tugasbesarci_model->gettugasbesarci($id);

		if($this->form_validation->run()==FALSE)
		{
			//$this->load->view('tugasbesarci/tampil_berita_view',$data);
			$this->load->view('tugasbesarci/tampil_berita_view_default',$data);
		}
		else
		{
					$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '1000000000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('userfile')){
				//$error = array('error' => $this->upload->display_errors());
				//$this->load->view('tambah_wisata_view1',$error);
				echo "<script>alert('Pastikan kolom tidak ada yang kosong');history.go(-1);</script>";
		
				
			}
			else{
		
				$image_data = $this->upload->data();

				$configer = array (
						'image_library' => 'gd2',
						'source_image' => $image_data['full_path'],
						'maintain_ratio' => TRUE,
						'width' => 250,
						'height' => 250,
				);	
				$this->load->library('image_lib', $config);

				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

				$this->tugasbesarci_model->UpdateById($id);
				$this->load->view('tugasbesarci/tambah_tugasbesarci_sukses');}}	}

}
 ?>