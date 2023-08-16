<?php $this->load->view('tugasbesarci/header');?>


<div class="container">
<div class="panel panel-default">
<div class="well well-sm">Data Wisata </div>
<div class="panel-body">

<h1>Data Wisata </h1>
<table class="table table-hover"> 
	<tbody>
	<tr>
	<td>Judul</td>
	<td>Isi</td>
	<td>Tanggal dibuat</td>
	<td>gambar</td>
	<td>status</td>
	<td>edit</td>
	<td>delete</td>
	</tr>
	<?php foreach ($tugasbesarci_builder_array as $key) {?>
		<tr>
	<!-- <td><?php echo $key['id'] ?></td> -->
			<td><?php echo $key['Judul'] ?></td>
		
			<td><?php echo $key['Isi'] ?></td>
		
			<td><?php echo Date('d-m-Y', strtotime($key['Tanggal_dibuat'])) ?></td>
			
			<td><img src=<?=base_url("assets/uploads")."/".$key['foto'] ?>></td>
			
			<td><?php echo $key['status'] ?></td>

			<td><a href="<?=site_url()?>/tugasbesarci/Update/<?php echo $key['id'] ?>"><p data-placement="top" data-toogle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toogle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
			<td><a href="<?=site_url()?>/tugasbesarci/delete/<?php echo $key['id'] ?>"><p data-placement="top" data-toogle="tooltip" title="Edit"><button class="btn btn-danger btn-xs" data-title="Delete" data-toogle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td>
		</tr>
		
		</tbody>
		<?php } ?>
		</table>
		</div>

		</table>
	</div>

	<?php $this->load->view('tugasbesarci/footer');?>	