<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EV FUND CROWFUNDING WEBSITE</title>
	<!--link the bootstrap css file-->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
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
				<li><a href="<?php site_url('home/logout')?>">Log Out</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div class="jumbotron">
  <h1>Welcome to EVFUND</h1>
  <p>Anda sedang panitia event? butuh dana untuk acara anda? tunggu apa lagi ?</p>
  <p>Kirimkan segera event mu di Evfund</p>
  <p><a class="btn btn-primary btn-lg" role="button" href="<?= site_url('uploads') ?>">UPLOAD PROPOSAL</a></p>
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>

