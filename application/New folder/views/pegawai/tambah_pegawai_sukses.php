<?php $this->load->view('pegawai/header');?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<?php 

	echo "sukses simpan data";
	echo anchor('pegawai/create', 'Masukan data lagi');

 ?>
 </div>

 <?php $this->load->view('pegawai/footer');?>