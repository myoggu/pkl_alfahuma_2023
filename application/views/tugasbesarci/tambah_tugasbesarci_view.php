<?php $this->load->view('tugasbesarci/header_admin');?>

<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tambah berita
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>  
                            </li>
                        </ol>
                    </div>
                </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php echo form_open_multipart('tugasbesarci_admin/create') ?>	
	<?php echo form_open('tugasbesarci_admin/create'); ?>

	<?php echo validation_errors();  ?>
	<div class="form-group"> 
		<label for="">Judul</label>
		<input type="text" name="Judul" class="form-control" id="Judul" placeholder="Judul">
		<br>
		<label for="">Isi</label>
		<input type="text" name="Isi" class="form-control" id="Isi" placeholder="Isi">
		<br>
		<label for="">Tanggal_dibuat</label>
		<input type="date" name="Tanggal_dibuat" class="form-control" id="tanggal" placeholder="Tanggal_dibuat">
<br>
		<label for="">foto</label>
		<input type="file" name="userfile" class="form-control" id="foto" size="20"><br>
	</div>


	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
</div>




  

            </div>
     

        </div>


    </div>
    

</body>

<?php $this->load->view('tugasbesarci/footer_admin');?>
