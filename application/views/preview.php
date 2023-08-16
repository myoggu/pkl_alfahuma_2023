<?php $this->load->view('tugasbesarci/header_default');?>
	
<!DOCTYPE html>
<html>
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
<table style="border: 0px">
	<tr>
		<!-- <td style="border: 0px">
			<left><img width="150px" height="150px" src="../image/logo2.png"><left></td> -->
		 <h2><p style="text-align: center">Karir</p>
</h2> 
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
</body>
</html>
<?php $this->load->view('tugasbesarci/footer');?>																		