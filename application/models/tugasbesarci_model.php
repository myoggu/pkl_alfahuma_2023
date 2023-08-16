<?php 
defined('BASEPATH') or exit ('no direct script access allowed');

/**
* 
*/
class tugasbesarci_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function inserttugasbesarci()
	{
		# code...
		$object =array
		('Judul' =>$this->input->post('Judul'),
		'Isi' =>$this->input->post('Isi'),
		'Tanggal_dibuat' =>$this->input->post('Tanggal_dibuat'),
		'foto' =>$this->upload->data('file_name')
		);
		$this->db->insert('berita',$object);
	}
	public function tambah_persyaratan()
	{
		# code...
		$object =array
		('id' =>$this->input->post('id'),
		'jenis' =>$this->input->post('jenis'),
		);
		$this->db->insert('persyaratan',$object);
	}

	public function gettugasbesarciBuilderArray(){		
		//$query=$this->db->get('berita'); array
	$query=$this->db->query('select * from berita order by Tanggal_dibuat desc');
		return $query->result_array();
	}
	public function gettugasbesarciBuilderArray1(){		
		//$query=$this->db->get('berita'); array
		$query=$this->db->query('select * from user order by username asc where level="member"');
		return $query->result_array();
	}
	public function getpersyaratan(){		
		//$query=$this->db->get('berita'); array
		$query=$this->db->query('select * from persyaratan order by id asc');
		return $query->result_array(); }
																	public function gettugasbesarciBuilderObject(){		
																	$query=$this->db->query('select * from berita order by Tanggal_dibuat desc limit 4');
																	return $query->result_array();}

																	public function gettugasbesarciBuilderObject1(){		
																	$query=$this->db->query('select * from berita where status=1 order by Tanggal_dibuat desc limit 10');
																	return $query->result_array();}

																	public function gettugasbesarciBuilderObject2(){		
																	$query=$this->db->query('select * from user where level="member"');
																	return $query->result_array();}

																	public function gettugasbesarciBuilderObject3(){	

																		$query = $this->db->query("select * from user order by username");
  return $query;

																	}


																	


	public function gettugasbesarci($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('berita');
		return $query->result();
	}
		public function gettugasbesarci1($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('berita');
		return $query->result();
	}

	public function getuser($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('user');
		return $query->result();
	}
	
	public function getpersyaratan_edit($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('persyaratan');
		return $query->result();
	}
	// public function getPegawaiBuilderArray(){		
	// 	$query=$this->db->get('pegawai');
	// 	return $query->result_array();
	// }

	// public function getpegawaiAbc($id){
	// 	$this->db->where('id',$id);
	// 	$query=$this->db->get('pegawai');
	// 	return $query->result();
	// }

	public function UpdateById($id)
	{
		$data = array 
	(
		'Judul' =>$this->input->post('Judul'),
		'Isi' =>$this->input->post('Isi'),
		'Tanggal_dibuat' =>$this->input->post('Tanggal_dibuat'),
		'foto' =>$this->upload->data('file_name')
	);
	$this->db->where('id',$id);
	$this->db->update('berita',$data);
	}

public function Update_status($id)
	{
		$data = array 
	(
		'Judul' =>$this->input->post('Judul'),
		'status' =>$this->input->post('status')
	);
	$this->db->where('id',$id);
	$this->db->update('berita',$data);
	}

public function Update_user($id)
	{
		$data = array 
	(
		'username' =>$this->input->post('username'),
		'password' =>md5($this->input->post('password'))
	);
	$this->db->where('id',$id);
	$this->db->update('user',$data);
	}
public function Update_persyaratan($id)
	{
		$data = array 
	(
		'id' =>$this->input->post('id'),
		'jenis' =>$this->input->post('jenis')
	);
	$this->db->where('id',$id);
	$this->db->update('persyaratan',$data);
	}



	public function delete($id)
{
	$this->db->where('id',$id);
	$this->db->delete('berita');
}

	public function delete_user($id)
{
	$this->db->where('id',$id);
	$this->db->delete('user');
}
	public function delete_persyaratan($id)
{
	$this->db->where('id',$id);
	$this->db->delete('persyaratan');
}


	 }
?>