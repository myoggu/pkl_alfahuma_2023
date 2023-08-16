<?php $this->load->view('tugasbesarci/header_admin'); ?>



<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
<div class="container">
<div class="row">
<?php echo form_open_multipart('tugasbesarci_admin/daftar_hot_topic_edit/'.$this->uri->segment(3)); ?>
<legend><h1>Edit Berita</h1></legend> <br><br>

<?php

//var_dump($Pegawai);?>
<?php echo validation_errors(); ?>


<div class="form-group">
    <label class="control-label col-sm-2" for="Judul">Judul : </label>
    <div class="col-sm-10">
    <input type="text" name="Judul" class="form-control" id="Judul" value="<?php echo $berita[0]->Judul?>" placeholder="Judul"><br>
</div>  
</div>


<div class="form-group">
    <label class="control-label col-sm-2" for="status">status : </label>
    <div class="col-sm-10">
    <input type="text" name="status" class="form-control" id="status" value="<?php echo $berita[0]->status?>" placeholder="status"><br>
</div>  
</div>


<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>
</div></div></div></div>
</form>

    

            </div>
     

        </div>


    </div>
    

</body>

</html>

<?php $this->load->view('tugasbesarci/footer_admin');?>
