<?php $this->load->view('tugasbesarci/header_admin');?>
	



<body>

    

							        <div id="page-wrapper">

							            <div class="container-fluid">

							                <!-- Page Heading -->
							                <div class="row">
							                    <div class="col-lg-12">
							                        <h1 class="page-header">
							                           Edit Persyaratan
							                        </h1>
							                        <ol class="breadcrumb">
							                            <li class="active">
							                                <i class="fa fa-dashboard"></i> 
							                            </li>
							                        </ol>
							                    </div>
							                </div>
 
<div class="table-responsive col-md-5">
<h1> </h1>
<table class="table table-hover"> 
	<tbody>
	<tr>
	<td>No.</td>
	<td>jenis</td>
	<td>Edit</td>
	<td>Delete</td>
	</tr>
	<?php foreach ($tampil as $key) {?>
		<tr>
	<!-- <td><?php echo $key['id'] ?></td> -->
			<td><?php echo $key['id'] ?></td>
		
			<td><?php echo $key['jenis'] ?></td>
		

			<td><a href="<?=site_url()?>/tugasbesarci_admin/edit_persyaratan_open/<?php echo $key['id'] ?>"><p data-placement="top" data-toogle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toogle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
			<td><a href="<?=site_url()?>/tugasbesarci_admin/delete_persyaratan/<?php echo $key['id'] ?>"><p data-placement="top" data-toogle="tooltip" title="Edit"><button class="btn btn-danger btn-xs" data-title="Delete" data-toogle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td>
		</tr>
		
		</tbody>
		<?php } ?>
		</table>
		</div>

		</table>
																	</div>   

																            </div>
																     

																        </div>


																    </div>
																    

																</body>

																</html>