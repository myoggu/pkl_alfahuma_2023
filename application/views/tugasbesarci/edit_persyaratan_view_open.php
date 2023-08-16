<?php $this->load->view('tugasbesarci/header_admin'); ?>



<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> D\
                            </li>
                        </ol>
                    </div>
                </div>
<div class="container">
<div class="row">
    <?php echo form_open_multipart('tugasbesarci_admin/edit_persyaratan_open/'.$this->uri->segment(3)); ?>
<legend><h1>Edit Persyaratan</h1></legend> <br><br>

<?php

//var_dump($Pegawai);?>
<?php echo validation_errors(); ?>


<div class="form-group">
    <label class="control-label col-sm-2" for="id">id : </label>
    <div class="col-sm-10">
    <input type="text" name="id" class="form-control" id="id" value="<?php echo $persyaratan[0]->id?>" placeholder="id"><br>
</div>  
</div>


<div class="form-group">
    <label class="control-label col-sm-2" for="jenis">jenis : </label>
    <div class="col-sm-10">
    <input type="text" name="jenis" class="form-control" id="jenis" value="<?php echo $persyaratan[0]->jenis?>" placeholder="jenis"><br>
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
