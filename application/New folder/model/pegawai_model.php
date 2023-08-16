<?php 
defined('BASEPATH') or exit ('no direct script access allowed');

/**
* 
*/
class pegawai_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function insertpegawai()
	{
		# code...
		$object =array
		('nama' =>$this->input->post('nama'),
		'nip' =>$this->input->post('nip'),
		'tanggal' =>$this->input->post('tanggal'),
		'alamat' =>$this->input->post('alamat'));
		$this->db->insert('pegawai',$object);
	}



	public function getpegawai(){
		$query=$this->db->get('pegawai');
		return $query->result();
	}
}
 ?>