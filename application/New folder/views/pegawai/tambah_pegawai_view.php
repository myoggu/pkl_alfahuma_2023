<?php $this->load->view('pegawai/header');?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	
	<?php echo form_open('pegawai/create'); ?>
	<legend>Tambah Data Pegawai</legend>
	<?php echo validation_errors();  ?>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
		
		<label for="">Nip</label>
		<input type="text" name="nip" class="form-control" id="nip" placeholder="Nip">
		
		<label for="">tanggal</label>
		<input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal">

		<label for="">Alamat</label>
		<input type="text" name="alamat" class="form-control" id="tanggal" placeholder="Alamat">

	</div>


	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
</div>

<?php $this->load->view('pegawai/footer');?>
