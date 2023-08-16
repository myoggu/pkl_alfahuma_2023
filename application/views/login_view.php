


<!-- div class="container">
<?php// $this->load->view('tugasbesarci/headerlogin');?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<?php //echo form_open('login/cekLogin') ?>
		<?php echo form_open("login/cek_login"); ?>	
			<div class="form-group">	
				<legend>Login ke sistem</legend>
			</div>
			<?php echo validation_errors(); ?>
			<div class="form-group">
				<label for="">username</label>
				<input type="text" class="form-control" id="username" name="username"
				placeholder="input field">

			</div>
			<div class="form-group">
				<label for="">password</label>
				<input type="password" class="form-control" id="password" name="password"
				placeholder="input field">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Masuk</button>
			</div>
			<?php echo form_close(); ?>
			</form>
	</div>
</div -->




<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Page </title>
  
  
  
      <link rel="stylesheet" href="<?=base_url()?>css2/style.css">

  
</head>

<body style="background-image: url(<?php echo base_url()."image/19366.jpg"?>); ">

  <div class="login-page">

  <div class="form">
<h1>Login Page</h1>
     
   <?php echo form_open("login/cek_login"); ?>
    <form class="login-form">

<?php echo validation_errors(); ?>
      <input type="text" placeholder="username" id="username" name="username">
      <input type="password" placeholder="password" id="password" name="password">
      <button type="submit" class="btn btn-primary">login</button>
      <p class="message">Not registered? <a href="<?=base_url()?>index.php/login/create">Create an account</a></p>
<?php echo form_close(); ?>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?=base_url()?>js2/index.js"></script>

</body>
</html>

