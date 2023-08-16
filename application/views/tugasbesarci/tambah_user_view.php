

<!-- div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<?php// $this->load->view('tugasbesarci/headerlogin');?>
	<?php //echo form_open_multipart('login/create') ?>	
	<?php //echo form_open('login/create'); ?>
	<legend><center>Form Registrasi</center></legend> <br><br><br>
	<?php //echo validation_errors();  ?>
	<div class="form-group">
		<label for="">username</label>
		<input type="text" name="username" class="form-control" id="username" placeholder="username">
		
		<label for="">password</label>
		<input type="password" name="password" class="form-control" id="password" placeholder="password">
		
	
	</div>


	<button type="submit" class="btn btn-primary">Daftar</button>
	<?php echo form_close(); ?>


	<?php //$this->load->view('tugasbesarci/footer');?>
</div -->




<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register page</title>
  
  
  
      <link rel="stylesheet" href="<?=base_url()?>css2/style.css">

  
</head>

<body style="background-image: url(<?php echo base_url()."image/1.jpg"?>); ">

  <div class="login-page">

  <div class="form">
<h1>Register Page</h1>


  	<?php echo form_open_multipart('login/create') ?>	
    <form class="register-form">

	<?php echo form_open('login/create'); ?>
      <input type="text" placeholder="username" name="username" class="form-control" id="username" >
      <input type="password" placeholder="password" name="password" class="form-control" id="password">

      <button type="submit" class="btn btn-primary">create</button>
      <p class="message">Already registered? <a href="<?=base_url()?>index.php/login/index">Sign In</a></p>
   <?php echo form_close(); ?>
    </form>

      </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?=base_url()?>js2/index.js"></script>

</body>
</html>

