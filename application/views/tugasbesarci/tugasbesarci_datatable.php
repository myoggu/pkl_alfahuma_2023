
<?php $this->load->view('tugasbesarci/header_default');?>

<div class="container">
<div class="panel panel-default">
<div class="well well-sm"><h1> Find Your Favorite News </h1>

    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?=base_url()?>index.php/tugasbesarci/viewer">Home</a>
                    </li>
                    <li class="active">News List</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
      </div>


</div>
<div class="panel-body">


<table class="table table-striped" width="100%" id="example"> 
	<thead>
	<tr>
	
	<td>Judul</td>
	
	<td>Tanggal Posting</td>
	<td>gambar</td>
	<td>Click Here</td>
<?php /*	
  
	<td type="hidden">edit</td>
	<td type="hidden">delete</td>
*/?>
	</tr>
</thead>
<tbody>
	<?php foreach ($tugasbesarci_builder_array as $key) {?>
		
			<tr>
	<!-- <td><?php echo $key['id'] ?></td> -->
			<td><?php echo $key['Judul'] ?></td>
		
		
		
			<td><?php echo Date('d-m-Y', strtotime($key['Tanggal_dibuat'])) ?></td>
			
			<td> <img src=<?=base_url("assets/uploads")."/".$key['foto'] ?>></td>

			<td>  <a href="<?=site_url()?>/tugasbesarci/Tampil_berita/<?php echo $key['id'] ?>">a</td>
			
<?php /* 
			<td type="hidden"><a href="<?=site_url()?>/tugasbesarci/Update/<?php echo $key['id'] ?>"><p data-placement="top" data-toogle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toogle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
			
			<td type="hidden"><a href="<?=site_url()?>/delete/delete/<?php echo $key['id'] ?>"><p data-placement="top" data-toogle="tooltip" title="Edit"><button class="btn btn-danger btn-xs" data-title="Delete" data-toogle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td>
*/?>		</tr>
		<?php } ?>
		</tbody>
		</table>
		</div>
		</div>
		</div>
		</div>
	<?php $this->load->view('tugasbesarci/footer_member');?>	