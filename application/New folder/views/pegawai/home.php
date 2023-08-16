<?php $this->load->view('pegawai/header');?>

<div class="container">
	<div class="panel panel-default">
	<div class="well well-sm">Data Pegawai</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
			<tr>
					<td>Nama</td>
					<td>Nip</td>
					<td>Tanggal</td>
					<td>Alamat</td>
			</tr>
			</thead>	
			<tbody>
				<?php foreach ($data_pegawai as $key) { ?>
				<tr>
					<td><?php echo $key->Nama ?></td>
					<td><?php echo $key->Nip ?></td>
					<td><?php echo date('d-m-Y',strtotime($key->Tanggal)) ?></td>
					<td><?php echo $key->Alamat ?></td>
			</tbody>
			<?php } ?>
				
		</table>
	</div>
	</div>
</div>
<?php $this->load->view('pegawai/footer');?>