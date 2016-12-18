<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ev-fund Proposal</title>
		<!-- Load Jquery, Bootstrap, DatTables dari CDN -->
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
		<style>
			.row div{border:#000 0px solid}
		</style>
	</head>
	<body>
	
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
		<div class="navbar-header">
				
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">EV FUND CROWFUNDING </a>
			</div>
			<div class="collapse navbar-collapse" id="navbar1">
				<ul class="nav navbar-nav navbar-right">
					<?php if ($this->session->userdata('login')){ ?>
					<li><p class="navbar-text">Hello <?= $this->session->userdata('username') ?></p></li>
					<li><a href="<?= site_url('home/logout') ?>">Log Out</a></li>
					<?php } else { ?>
					<li><a href="<?php echo base_url(); ?>index.php/home">Home</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>
					<?php } ?>
				</ul>
		</div>
		</div>
	</nav>
	
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<h1>Daftar Proposal</h1>
				<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Pengirim</th>
							<th>Deskripsi</th>
							<th>Proposal</th>
							<th>
								<?=anchor(	'uploads/create',
											'Upload Proposal',
											['class'=>'btn btn-primary btn-xs']
								)?>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($uploads as $upload) : ?>
						<tr>
							<td><?=$upload->id?></td>
							<td><?=$upload->name?></td>
							<td><?=$upload->description?></td>
							<td><?=$upload->proposal?></td>
							
							
							<td>
								<?=anchor(	'uploads/update/'.$upload->id,
											'Edit',
											['class'=>'btn btn-default btn-xs'])
								?>
								<?=anchor(	'uploads/delete/'.$upload->id,
											'Delete',
											['class'=>'btn btn-danger btn-xs',
											 'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
											])
								?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-1"></div>
		</div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>

