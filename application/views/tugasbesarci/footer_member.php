
		<script src="<?=base_url()?>assets/js/jquery.min.js" rel="stylesheet"></script>
		<script src="<?=base_url()?>assets/js/bootstrap.min.js" rel="stylesheet"></script>

 		
	<script src="<?=base_url()?>assets/datatables.min.js" rel="stylesheet"></script>
	<script type="text/javascript">

	$(document).ready(function() {
		$('#example').DataTable({ 
			"processing":true,
			"serverside":true,
			"lengthMenu":[[5,10,-1],[5,10,"All"]],
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
		"data":"Tanggal_dibuat",
		},

		{
		"targets":2,
		"data":"foto",
		"render":function(data,type,full,meta){
			return '<img width="200px" height="150px" src="<?=base_url()?>assets/uploads/'+data+'">';
			}
		},
		{
		"targets":3,
		"data":null,
		"searchable":false,
		"render":function(data,type,full,meta){
			return '<a href="<?=site_url()?>/tugasbesarci/Tampil_berita/'+data["id"]+'">Read</a>'
			}
		}
	]
	});
		
	});
</script>
	</body>
</html>