<?php $this->load->view('tugasbesarci/header_admin');?>





<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Data berhasil disimpan
                        </h1>
                        
                    </div>
                </div>
    

<?php 


	echo anchor('tugasbesarci_admin/datatable_ajax', 'Kembali ke halaman edit berita');

 ?>




            </div>
     

        </div>


    </div>
    

</body>

</html>

 <?php $this->load->view('tugasbesarci/footer_admin');?>