<?php $this->load->view('tugasbesarci/header');?>
<style type="text/css">
   .left    { text-align: left;}
   .right   { text-align: right;}
   .center  { text-align: center;}
   .justify { text-align: justify;}
</style>
	
	<div class="table-responsive col-md-5">
<h1>Data Wisata </h1>
<table class="table table-hover" width="100%"> 
	<tbody>

	<?php foreach ($tugasbesarci_builder_object as $key) {?>
		<tr>
	
			<td> <center><?php echo $key['Judul'] ?></center></td>
<td> <center><?php echo $key['id'] ?></center></td>
				
		</tr>
		<tr>
			<td><center><img src=<?=base_url("assets/uploads")."/".$key['foto'] ?>></center></td>
		</tr>
		<tr><td><?php echo $key['Isi'] ?></td></tr>
		<tr><td>
		 <p class="right">
		<?php echo Date('d-m-Y', strtotime($key['Tanggal_dibuat'])) ?><br><br><br><hr></td>	</tr>
		</tbody>
		<?php } ?>
		</table>
		</div>
</table>

	</div>

	<?php $this->load->view('tugasbesarci/footer');?>	