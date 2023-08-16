<?php $this->load->view('tugasbesarci/header_admin'); ?>


	<?php echo form_open_multipart('tugasbesarci_admin/Update/'.$this->uri->segment(3)); ?>

<?php echo validation_errors(); ?>



<?php echo form_close(); ?>


<?php  ?>




<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            News Page 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <?php echo $berita[0]->Judul?>
                            </li>
                        </ol>
                    </div>
                </div>
    <table > 
                                <tbody>
                                
                                      <tr><br>
                                            <td><h1><center><?php echo $berita[0]->Judul?></center></h1></td>
                                      </tr>
                                      <tr>
                                          <td><h6><?php echo $berita[0]->Tanggal_dibuat?></h6></td>
                                      </tr>
                                      <tr>
                                            <td><center><img width="500px" height="300px" src=<?=base_url("assets/uploads")."/".$berita[0]->foto?>></center></td>
                                      </tr>

                                      <tr>
                                          <td><hr> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $berita[0]->Isi?></td>
                                      </tr>
                                 </tbody>
                                   
                         </table> 

            </div>
     

        </div>


    </div>
    

</body>
<?php $this->load->view('tugasbesarci/footer_admin');?>
