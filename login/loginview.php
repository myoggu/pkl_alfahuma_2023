<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">CRUD Framework</a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
								        <li class="active"><a href="<?php echo site_url('pegawai') ?>">Data Pegawai</a></li>
								        <li><a href="<?php echo site_url('pegawai/DataTable') ?>">DataTable Pegawai</a></li>
									</ul>

									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo site_url()?>/login?>">Sign In</a></li>
												<li><a href="<?php echo site_url()?>/login/create?>">Sign Up</a></li>
												<li><a href="<?php echo site_url()?>/login/logout?>">Log Out</a></li>
											</ul>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>	

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php echo form_open('login/cekLogin'); ?>
								<center><h1>Halaman Login</h1>
								</center><br>
								<?php echo validation_errors(); ?>
								<table class="" border=0 width="700" cellpadding="0" cellspacing="0" align="center">
								<tr>
									<td>
									<div class="form-group input-group">
									<span class="input-group-addon" id="basic-addon3">Username </span>
									<input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" aria-describedby="basic-addon3">
									</td>
								</tr>

								<tr>
									<td>
									<div class="form-group input-group">
									<span class="input-group-addon" id="basic-addon3">Password</span>
									<input type="Password" class="form-control" id="password" name="password" placeholder="Masukkan Password" aria-describedby="basic-addon3">
									</td>
								</tr>
								
								<tr>
									<td align="center">
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-primary btn-danger">Reset</button>

									</td>
								</tr>
								</table>

					<?php echo form_close(); ?>
					</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>