<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
			<style>

				#depan{
				
						background-color:#1CB5BF;
						margin-top:20%;
						padding:20px;
						border-radius:5px;
						opacity:0.9;
				}
				
				
			</style>
	</head>
	
	<body>
	<img src="admin/gam/depan.jpg" width="100%" height="100%" style="position:fixed;">

		<div class="container">
			<form action="" method="post"">
				<div class="col-md-4 col-md-offset-4" id="depan">
					
					<center><h3>Halaman Login</h3></center>
					<?php
				if(isset($_GET['pesan'])){
					if($_GET['pesan']=="gagal"){
					echo "<div class='alert alert-danger' role='alert'><center><span class='glyphicon glyphicon-warning-sign'></span> Login gagal!!! Username atau Password salah</center></div>";
					}
				}
			?>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" placeholder="Username" name="userr" required autofocus>
					</div>
					<div class="input-group" style="padding-top:5px;">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" class="form-control" placeholder="Password" name="passw" required>
					</div>
					<br>
					<center>
					<div class="input-group">
						<input type="submit" class="btn btn-primary" style="padding:7px 50px;" name="submit" value="login">
					</div>
					</center>
				</div>
			</form>
		</div>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){
			session_start();
			include "admin/config/koneksi.php";
				$pass=$_POST['passw'];
				$pass=md5($pass);
				$user=$_POST['userr'];
				
				$sql="select * from admin where adminn='$user' and password ='$pass'";
				$masuk = mysqli_query($koneksi,$sql);
				$row=$masuk->num_rows;
				if($row==1){
					$_SESSION['username']=$user;
					header("location:admin/index.php");
				}
				else{
							header("location:index.php?pesan=gagal")or die(mysql_error());
				}
				
	}
?>
