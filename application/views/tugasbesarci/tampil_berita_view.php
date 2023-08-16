<?php $this->load->view('tugasbesarci/header'); ?>

<div class="container">
<div class="row">
	<?php echo form_open_multipart('tugasbesarci/Update/'.$this->uri->segment(3)); ?>
<legend>News Page : <?php echo $berita[0]->Judul?></legend>

<?php

//var_dump($Pegawai);?>
<?php echo validation_errors(); ?>



<?php echo form_close(); ?>
</div>	</div></div></div></div></form>

<?php  ?>

 <div class="container">

        

                
                <div class="list-group">                   
                    <a class="list-group-item">
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
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
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->					 
					         </a>
                </div>
            </div> </div>  


<?php $this->load->view('tugasbesarci/footer');?>
