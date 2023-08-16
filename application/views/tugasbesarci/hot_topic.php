<div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Recent Update News!</p>
                <div class="list-group">                   
                    <a class="list-group-item">
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
                        <table class="table table-hover" width="100%"> 
                                <tbody>
                                <?php foreach ($tugasbesarci_builder_object as $key) {?> 
                                      <tr>
                                            <td rowspan="2"><a href="<?=site_url()?>/tugasbesarci/Tampil_berita/<?php echo $key['id'] ?>"><img width="90px" height="70px" src=<?=base_url("assets/uploads")."/".$key['foto'] ?>></td>
                                            <td><type="hidden" <?php echo $key['id'] ?>>
                                            <center>
                                            
                                            <a href="<?=site_url()?>/tugasbesarci/Tampil_berita/<?php echo $key['id'] ?>"><?php echo $key['Judul'] ?>

                                            </center>
                                            </td>

                                      </tr>
                                      <tr>
                                            <td>
                                                <?php echo Date('d-m-Y', strtotime($key['Tanggal_dibuat'])) ?> 
                                                
                                            </td>
                                      </tr>
                                 </tbody>
                                    <?php } ?>
                         </table> 
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->                  
                    </a>
                </div>
            </div>
 <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->     
