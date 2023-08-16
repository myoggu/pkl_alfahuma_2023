<?php $this->load->view('wisata/headerlogin');?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php echo form_open_multipart('login/create') ?>	
	<?php echo form_open('login/create'); ?>
	<legend>Tambah Data User</legend>
	<?php echo validation_errors();  ?>
	<div class="form-group">
		<label for="">username</label>
		<input type="text" name="username" class="form-control" id="username" placeholder="username">
		
		<label for="">password</label>
		<input type="password" name="password" class="form-control" id="password" placeholder="password">
		
	
	</div>


	<button type="submit" class="btn btn-primary">Daftar</button>
	<?php echo form_close(); ?>
</div>

<?php $this->load->view('wisata/footer');?>
