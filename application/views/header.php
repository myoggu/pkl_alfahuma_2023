<!--DOCTYPE html-->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="FabberNainggolan">
		<title>Josss web</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		
		<?php //data table ?>

		<script src="<?=base_url()?>assets/datatables.min.css" rel="stylesheet"></script>


		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default navbar-static-top" >
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="<?=base_url()?>index.php/tugasbesarci/home1">CRUD</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div id="navbar"class="navbar-collapse collapse ">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?=base_url()?>index.php/tugasbesarci/index"><i class="glyphicon glyphicon-home"></i>Edit Wisata</a></li>
	<?php  /*
						<li><a href="<?=base_url()?>index.php/tugasbesarci/about"><i class="glyphicon glyphicon-info-sign"></i>About </a></li> 
						<li><a href="<?=base_url()?>index.php/tugasbesarci/contact"><i class="glyphicon glyphicon-info-sign"></i>Contact</a></li> 
	*/	?>			
						<li><a href="<?=base_url()?>index.php/tugasbesarci/create"><i class="glyphicon glyphicon-info-sign"></i>Tambah data</a></li> 
						<li><a href="<?=base_url()?>index.php/tugasbesarci/data_tugasbesarci"><i class="glyphicon glyphicon-info-sign"></i>Lihat data tugasbesar</a></li>
						
						<li><a href="<?=base_url()?>index.php/tugasbesarci/datatable"><i class="glyphicon glyphicon-info-sign"></i>Data Table</a></li>
						<li><a href="<?=base_url()?>index.php/tugasbesarci/datatable_ajax"><i class="glyphicon glyphicon-info-sign"></i>datatable_ajax</a></li>
						
						<li><a href="<?=base_url()?>index.php/tugasbesarci/data_tugasbesarci"><i class="glyphicon glyphicon-info-sign"></i>data_tugasbesarci</a></li>
						
						<li><a href="<?=base_url()?>index.php/cetak"><i class="glyphicon glyphicon-info-sign"></i>cetak form pendafaran</a></li>


						<li><a href="<?=base_url()?>index.php/admin/c_admin/logout"><i class="glyphicon glyphicon-info-sign"></i>Logout </a></li> 






						<!--li><a href="<?=base_url()?>index.php/pegawai/dataPegawai"><i class="glyphicon glyphicon-info-sign"></i>Edit data</a></li>
						<!-- <li><a href="<?=base_url()?>index.php/pegawai/contact"></i>Contact</a></li> -->
						
					</ul>
					
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	