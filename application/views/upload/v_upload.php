<!DOCTYPE html>
<html>
head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Ev-Fund</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="welcome"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="welcome">Home</a></li>
					<li><a href="lihat">Lihat</a></li>
					<li><a href="upload">Upload Proposal</a></li>
					<li><a class="btn" href="logout">Log Out</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
	
		<div class="container text-center">
		<br> <br>
		<h2 class="thin">EvFund Upload Dokumen</h2>
		<p class="text-muted">
			Sudah siapkah memberikan event anda kepada dunia ? <br> 
			Upload Dokumen anda disini.
		</p>
	</div>
	
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
        <legend>Form File Upload</legend>
        <?php echo form_open_multipart('upload/upload');?>

        <fieldset>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label for="filename" class="control-label">Select File to Upload</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="file1" size="20" />
                        <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Upload File" class="btn btn-primary"/>
                    </div>
                </div>
            </div>
        </fieldset>
        
        <?php echo form_close(); ?>
        <?php if (isset($success_msg)) { echo $success_msg; } ?>
        </div>
    </div>
</div>
</body>
</html>