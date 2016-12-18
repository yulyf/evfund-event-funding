<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ev-fund Upload Proposasl</title>
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
					<li><a href="<?php echo base_url(); ?>index.php/uploads">Back</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>
					<?php } ?>
				</ul>
		</div>
		</div>
	</nav>
	
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<h1>Upload New Proposal</h1>
				<div><?= validation_errors()?></div>
				<?= form_open_multipart('uploads/create', ['class'=>'form-horizontal']) ?>
					
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Nama Pengirim</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="name" placeholder="" value="<?= set_value('name') ?>">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Deskripsi Singkat Proposal</label>
						<div class="col-sm-10">
						  <textarea class="form-control" name="description"><?= set_value('description')?></textarea>
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Proposal</label>
						<div class="col-sm-10">
						  <input type="file" class="form-control" name="userfile">
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" class="btn btn-default">Save</button>
						</div>
					  </div>
					
				<?= form_close() ?>
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

