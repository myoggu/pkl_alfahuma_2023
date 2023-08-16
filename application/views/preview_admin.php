<?php $this->load->view('tugasbesarci/header_admin');?>
	


<head>
	<title>Laporan</title>
	<style>
	table{
		border-collapse: collapse;
		width: 70%;
		margin: 0 auto;
	}
	table th{
		border: 1px solid #000;
		padding: 3px;
		font-weight: bold;
		text-align: center;
	}
	table td{
		border: 1px solid #000;
		padding: 3px;
		vertical-align: top;
	}
	</style>
</head>









<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Persyaratan Pendaftaran
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>Persyaratan Pendaftaran Calon Taruna Akademi Militer T.A.2017
                            </li>
                        </ol>
                    </div>
                </div>
   <table style="border: 0px">
	<tr>
			<h2><p style="text-align: center">Karir</p></h2> 

	</tr>
</table>


<hr width="70%" height="20%">
<br>
<table>
	<tr>
		<th width="5%">Nomor</th>
		<th>Jenis Lowongan</th>
	
	</tr>
	<?php $no=0; foreach ($berita as $key){$no++;?>
	<tr>
		<td><?php echo $key->id ?></td>
	 	<td><?php echo $key->jenis ?></td>
	 	
	</tr>
	<?php }?>
</table>
<br>
<p style="text-align: center"><a href="<?php echo base_url()?>index.php/cetak/cetakpdf">Download Persyaratan Pendaftaran</a></p>


 

            </div>
     

        </div>


    </div>
    

</body>

</html>
<?php $this->load->view('tugasbesarci/header_admin');?>																		