<!DOCTYPE html>
<html>
	<head>
		<title>
			Laporan
		</title>
		<style>
			table{
				border-collapse: collapse;
				width: 100%;
				margin: 0 auto;
			}
			table th
			{
				border: 1px solid #000;
				padding: 3px;
				font-weight: bold;
				text-align: center;
			}
			table td
			{
				border: 1px solid #000;
				padding: 3px;
				vertical-align: top;
			}
		</style>	
	</head>
<body>
<table style="border: 0px">
	<tr>
		<td style="border: 0px"><center><img width="150px" height="150px" src="image/logo2.png"></center></td>
		<td style="border: 0px"><p style="text-align: center">Persyaratan Pendaftaran CATAR AD</p>
<p style="text-align: center">KECAMATAN LOWOKWRU</p>
<p style="text-align: center">KELURAHAN TULUSREJO</p>
<p style="text-align: center">Alamat:jl.bukirsari No.14 Malang Telp.081259807479</p></td>
		<td style="border: 0px"><center><img width="150px" height="150px" src="image/logo2.png"></center></td>
	</tr>
</table>
<br><br><br><br><br><br><br><br><br>
<hr width="100%" height="20%">
<br>
<table>
	<tr>
		<th width="5%">id</th>
		<th>jenis</th>
	
	</tr>
	<?php $no=0; foreach ($berita as $key){$no++;?>
	<tr>
		<td><?php echo $key->id ?></td>
	 	<td><?php echo $key->jenis ?></td>
	 	
	</tr>
	<?php }?>
</table>	
</body>

</html>