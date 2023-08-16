
<?php
defined ('BASEPATH') OR exit('no direct script access allowed');

class cetak_model extends CI_Model{
	public function view(){
		$this->db->select("id,Judul,Isi,date_format(Tanggal_dibuat,'%d-%m-%Y') as Tanggal_dibuat");
		$query = $this->db->get('berita');
		return $query->result();
	}
	public function view_row()
	{
		$this->db->select("id,jenis");
		$query = $this->db->get('persyaratan');
		return $query->result();
	}
}
?>