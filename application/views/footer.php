
		<script src="<?=base_url()?>assets/js/jquery.min.js" rel="stylesheet"></script>
		<script src="<?=base_url()?>assets/js/bootstrap.min.js" rel="stylesheet"></script>

 		
	<script src="<?=base_url()?>assets/datatables.min.js" rel="stylesheet"></script>
	<script type="text/javascript">

	$(document).ready(function() {
		$('#example').DataTable({ 
			"processing":true,
			"serverside":true,
			"lengthMenu":[[1,3,6,-1],[1,3,6,"All"]],
			"ajax":{
				url : "<?php echo site_url('tugasbesarci/data_server')?>",
				type : "POST"
			},
		"columnDefs":
	[
		{
		"targets":0,
		"data":"Judul",
		},

		{
		"targets":1,
		"data":"Isi",
		},

		{
		"targets":2,
		"data":"Tanggal_dibuat",
		},

		{
		"targets":3,
		"data":"foto",
		"render":function(data,type,full,meta){
			return '<img src="<?=base_url()?>assets/uploads/'+data+'">';
			}
		},
		
		{
		"targets":4,
		"data":null,
		"searchable":false,
		"render":function(data,type,full,meta){
			return '<a href="<?=site_url()?>/tugasbesarci/Update/'+data["id"]+'">Edit</a>'
			}
		},
		
		{
		"targets":5,
		"data":null,
		"searchable":false,
		"render":function(data,type,full,meta){
			return '<a href="<?=site_url()?>/tugasbesarci/Update/'+data["id"]+'">Delete</a>'
			}
		},
	]
	});
		
	});
</script>
	</body>
</html>