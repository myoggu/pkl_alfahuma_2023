

<?php $this->load->view('tugasbesarci/header_admin');?>




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
    <?php
    			echo ('data berhasil di hapus ');
				echo anchor('tugasbesarci_admin/daftar_peserta','Kembali ke halaman edit berita');
			?>

            </div>
     

        </div>


    </div>
    

</body>

</html>

<?php $this->load->view('tugasbesarci/footer_admin');?>

