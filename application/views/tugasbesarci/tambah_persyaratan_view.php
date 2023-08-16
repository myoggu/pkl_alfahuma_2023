<?php $this->load->view('tugasbesarci/header_admin');?>

<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tambah persyaratan
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>  
                            </li>
                        </ol>
                    </div>
                </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php echo form_open_multipart('tugasbesarci_admin/tambah_persyaratan') ?>	
	<?php echo form_open('tugasbesarci_admin/tambah_persyaratan'); ?>
	
	<?php echo validation_errors();  ?>
	<div class="form-group"> 

		<label for="">id</label>
		<input type="number" name="id" class="form-control" id="id" placeholder="id">
		<br>
		<label for="">jenis</label>
		<input type="text" name="jenis" class="form-control" id="jenis" placeholder="jenis">
		
        <br>
		
	</div>


	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
</div>




  

            </div>
     

        </div>


    </div>
    

</body>

<?php $this->load->view('tugasbesarci/footer_admin');?>
