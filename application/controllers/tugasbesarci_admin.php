<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugasbesarci_admin extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->load->model('tugasbesarci_model');

			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('url');
			
			
			//buat session nya
		// if ($this->session->userdata('username')=="") 
		// {
		// 	redirect('login');

		// }
		// else if($this->session->userdata('level')=="member") 
		// {
		// 	redirect('tugasbesarci');
	
		// }
		
		}
	public function index()
		{
			$this->load->view('tugasbesarci/index_admin');

		
		}

	public function create(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('Judul','Judul','trim|required');
		$this->form_validation->set_rules('Isi','Isi','trim|required');
		$this->form_validation->set_rules('Tanggal_dibuat','Tanggal posting','trim|required');
		

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
	
////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function delete($id)
			{
				# code...
				$this->tugasbesarci_model->delete($id);
				//$this->db->delete('id',$id);
				$this->load->view('tugasbesarci/hapus_tugasbesarci_sukses');
			}
	public function delete_user($id)
			{
				# code...
				$this->tugasbesarci_model->delete_user($id);
				//$this->db->delete('id',$id);
				$this->load->view('tugasbesarci/hapus_user_sukses');
			}
	public function delete_persyaratan($id)
			{
				# code...
				$this->tugasbesarci_model->delete_persyaratan($id);
				//$this->db->delete('id',$id);
				$this->load->view('tugasbesarci/hapus_persyaratan_sukses');
			}
/////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function Update($id)
			{
				$this->form_validation->set_rules('Judul','Judul','trim|required');
				$this->form_validation->set_rules('Isi','Isi','trim|required');
				$this->form_validation->set_rules('Tanggal_dibuat','Tanggal_dibuat','trim|required');
				
				$this->load->model('tugasbesarci_model');
				$data['berita']=$this->tugasbesarci_model->gettugasbesarci($id);

				if($this->form_validation->run()==FALSE)
				{
					$this->load->view('tugasbesarci/edit_tugasbesarci_view',$data);
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
						$this->load->view('tugasbesarci/tambah_tugasbesarci_sukses');}}	
		}

	
	public function daftar_hot_topic()
		{
			$this->load->model('tugasbesarci_model');
			$data['tugasbesarci_builder_object']=$this->tugasbesarci_model->gettugasbesarciBuilderArray();
			$this->load->view('tugasbesarci/daftar_hot_topic',$data);
		}

	public function daftar_hot_topic_edit($id)
		{
		$this->form_validation->set_rules('Judul','Judul','trim|required');		
		$this->load->model('tugasbesarci_model');
		$data['berita']=$this->tugasbesarci_model->gettugasbesarci1($id);

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('tugasbesarci/daftar_hot_topic_edit',$data);
			}
		else
			{
			
					$this->tugasbesarci_model->Update_status($id);
					$this->load->view('tugasbesarci/daftar_hot_topic_edit_suskses');
			}
		}	

	public function user_edit($id)
		{
		$this->form_validation->set_rules('username','username','trim|required');		
		$this->load->model('tugasbesarci_model');
		$data['user']=$this->tugasbesarci_model->getuser($id);

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('tugasbesarci/edit_user_view',$data);
			}
		else
			{
			
					$this->tugasbesarci_model->Update_user($id);
					$this->load->view('tugasbesarci/daftar_hot_topic_edit_suskses');
			}
		}

	
	public function viewer_admin()
		{
			
			$this->load->view('tugasbesarci/index_admin');
		}

	public function viewer()
		{


			$this->load->model('tugasbesarci_model');
			$data['tugasbesarci_builder_object']=$this->tugasbesarci_model->gettugasbesarciBuilderObject();
			$data['tugasbesarci_builder_object1']=$this->tugasbesarci_model->gettugasbesarciBuilderObject1();
	
			$this->load->view('tugasbesarci/index_viewer_admin',$data);
		}



	public function Tampil_berita($id)
		{
			$this->load->model('tugasbesarci_model');
			$data['berita']=$this->tugasbesarci_model->gettugasbesarci($id);

			if($this->form_validation->run()==FALSE)
			{
				$this->load->view('tugasbesarci/tampil_berita_view_admin',$data);
			}
			else
			{
				
			$this->load->view('tugasbesarci/tambah_tugasbesarci_sukses');}
		}

		
	public function data_server_member( )
		{
			$this->load->library('Datatables');
			$this->datatables
				->select('id,username,password')
				->from('user')
				->where('level="member"');
				echo $this->datatables->generate();
		}
	public function daftar_peserta()
		{
			//$this->load->model('tugasbesarci_model');
			//$data['tugasbesarci_builder_object']=$this->tugasbesarci_model->gettugasbesarciBuilderObject2();
			//$this->load->view('tugasbesarci/daftar_peserta',$data);
			$this->load->view('tugasbesarci/daftar_peserta');
		}
	public function datatable()
		{
	
		$data['tugasbesarci_builder_array']=$this->tugasbesarci_model->gettugasbesarciBuilderArray1();
		$this->load->view('tugasbesarci/tugasbesarci_datatable',$data);
		}
			
	public function edit_persyaratan(){
		$this->load->model('tugasbesarci_model');
		$data['tampil']=$this->tugasbesarci_model->getpersyaratan();
		$this->load->view('tugasbesarci/edit_persyaratan_view',$data);
	}

	public function edit_persyaratan_open($id)
		{
		$this->form_validation->set_rules('jenis','jenis','trim|required');		
		$this->load->model('tugasbesarci_model');
		$data['persyaratan']=$this->tugasbesarci_model->getpersyaratan_edit($id);

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('tugasbesarci/edit_persyaratan_view_open',$data);
			}
		else
			{
			
					$this->tugasbesarci_model->Update_persyaratan($id);
					$this->load->view('tugasbesarci/edit_persyaratan_sukses');
			}
		}
	public function tambah_persyaratan(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		// $this->form_validation->set_rules('Judul','Judul','trim|required');
		// $this->form_validation->set_rules('Isi','Isi','trim|required');
		// $this->form_validation->set_rules('Tanggal_dibuat','Tanggal posting','trim|required');
		$this->form_validation->set_rules('jenis','jenis','trim|required');

		$this->load->model('tugasbesarci_model');


		if($this->form_validation->run()==FALSE) 
		{
			# code...
			$this->load->view('tugasbesarci/tambah_persyaratan_view');
		}
		else
		{

				

				$this->tugasbesarci_model->tambah_persyaratan();
				$this->load->view('tugasbesarci/tambah_tugasbesarci_sukses');}}

	public function datatable_ajax()
		{
			$this->load->view('tugasbesarci/tugasbesarci_datatable_ajax');
		}
	public function data_server( )
		{
			$this->load->library('Datatables');
			$this->datatables
				->select('id,Judul,Isi,Tanggal_dibuat,foto,status')
				->from('berita');
				echo $this->datatables->generate();
		}
		public function data_server1( )
		{
			$this->load->library('Datatables');
			$this->datatables
				->select('id,Judul,Isi,Tanggal_dibuat,foto')
				->from('berita');
				echo $this->datatables->generate();
		}
}

/* End of file tugasbesarci_admin.php */
/* Location: ./application/controllers/tugasbesarci_admin.php */