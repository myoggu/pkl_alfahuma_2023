<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

<body>

    <?php $this->load->view('tugasbesarci/header_default');?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
           
                <ol class="breadcrumb">
                    <li><a href="<?=base_url()?>index.php/tugasbesarci/viewer">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
      </div>
        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
               <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d138.6605749882292!2d112.62994680930737!3d-7.942162706218286!2m2!1f197.83702571002854!2f39.33522909858087!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x2dd629dcd9c3f437%3A0xa5ee49003de8739a!2sJl.+Bukirsari%2C+Tulusrejo%2C+Kec.+Lowokwaru%2C+Kota+Malang%2C+Jawa+Timur+65141!5e1!3m2!1sid!2sid!4v1499610385251" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    Kota Malang,Jawa Timur<br>Jl Bukirsari No.14 <br> kode pos 65141 <br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Yoggy</abbr>: 08123456789</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Yoggy</abbr>: <a href="mailto:myoggu@gmail.com">myoggu@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">Jam Kerja</abbr>: Senin - Jumat: 09:00 - 16:00</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

        <!-- /.row -->

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
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
