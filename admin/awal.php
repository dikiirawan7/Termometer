<!DOCTYPE html>
<html>
	<head>
		<?php
			session_start();
			include 'config/cek.php';
			include 'config/koneksi.php';
		?>
		<title>APLIKASI PENGOLAH DATA TERMOMETER GELAS
		</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
		<script type="text/javascript" src="../assets/js/jquery.js"></script>
		<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="../assets/js/ajax.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>
		<script src="config/Chart.bundle.js"></script>
	</head>

	<body>
		<img src="gam/depan.jpg" width="100%" height="100%" style="position:fixed;">
		<div class="navbar navbar-default" style="background-color:#1CB5BF;">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand" style="color:white;">Aplikasi Pengolah Data Termometer Gelas</a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toogle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li ><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#" style="color:white;">Halo,<?php echo $_SESSION['username']?>&nbsp&nbsp<span class="glyphicon glyphicon-user"></span></a> </li>
				</ul>
				</div>
			</div>
		</div>

		<div class="col-md-2" >
			<div class="col-md-12" style="background-color:#EEEEEF;">

			<div class="row"></div>
			<ul class="nav nav-pills nav-stacked" >
				<li class="active" style="margin-top:10px;"><a href="index.php">Input Pelanggan</a></li>

				<li class="active"><a href="termometer1.php">Olah Data</a> </li>
				<li class="active"><a href="analisadata.php">Tabel Analisa Data</a></li>
				<li class="active"><a href="setalat.php">Set Termometer</a></li>

				<li class="active" style="margin-bottom:10px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>			
			</ul>
			</div>
		</div>
		<div class="col-md-10">
		