<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('tugasbesarci/header_admin');?>

<style type="text/css">
   .left    { text-align: left;}
   .right   { text-align: right;}
   .center  { text-align: center;}
   .justify { text-align: justify;}
   .textarea {
 left: 0;
 top: 0;
 visibility: hidden;
}
</style>




    <!-- Navigation -->
    

    <!-- Page Content -->

<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->

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
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->     
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
                                            <td rowspan="2"><a href="<?=site_url()?>/tugasbesarci_admin/Tampil_berita/<?php echo $key['id'] ?>"><img width="90px" height="70px" src=<?=base_url("assets/uploads")."/".$key['foto'] ?>></td>
                                            <td><type="hidden" <?php echo $key['id'] ?>>
                                            <center>
                                            
                                            <a href="<?=site_url()?>/tugasbesarci_admin/Tampil_berita/<?php echo $key['id'] ?>"><p class="left"><?php echo $key['Judul'] ?>

                                            </center>
                                            </td>

                                      </tr>
                                      <tr>
                                            <td>
                                               <p class="left"> <?php echo Date('d-m-Y', strtotime($key['Tanggal_dibuat'])) ?> 
                                                
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

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                 <div class="item active">
                                    <img class="slide-image" src="../../image/slider_image.jpg" alt=""  height="8px">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../../image/slider_image.jpg" alt=""  alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../../image/slider_image.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
<br><br><h1>Hot Topics</h1><br>
            
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->     
    <div class="container">

        <div class="row">


                <p class="lead">Recent Update News!</p>
                <div class="list-group">                   
                    <a class="list-group-item">
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
                        <table class="table table-hover" width="100%"> 
                                <tbody>
                                <?php foreach ($tugasbesarci_builder_object1 as $key) {?> 
                                      <tr>
                                            <td rowspan="2"><a href="<?=site_url()?>/tugasbesarci_admin/Tampil_berita/<?php echo $key['id'] ?>"><img width="90px" height="70px" src=<?=base_url("assets/uploads")."/".$key['foto'] ?>></td>
                                            <td><type="hidden" <?php echo $key['id'] ?>>
                                            <center>
                                            
                                            <a href="<?=site_url()?>/tugasbesarci_admin/Tampil_berita/<?php echo $key['id'] ?>"><p class="left"><?php echo $key['Judul'] ?>

                                            </center>
                                            </td>

                                      </tr>
                                      <tr>
                                            <td>
                                              <p class="left">  <?php echo Date('d-m-Y', strtotime($key['Tanggal_dibuat'])) ?> 
                                                
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

<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->   
            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
      <p>Copyright&copy; Polinema 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap1.min.js"></script>
    
<!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->


            </div>
     

        </div>


    </div>
    

</body>
</html>

    <?php $this->load->view('tugasbesarci/footer_admin');?>   
