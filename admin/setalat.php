<?php
	include 'awal.php';
	
		if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$termo1=$_POST['termo1'];
		$termo2=$_POST['termo2'];
		$termo3=$_POST['termo3'];
		$termo4=$_POST['termo4'];
		$termo5=$_POST['termo5'];
		$termo6=$_POST['termo6'];
				
		
		$sql1="update setalat set termo1='$termo1',termo2='$termo2',termo3='$termo3',termo4='$termo4',termo5='$termo5',termo6='$termo6'
		where no='$id'
		";
		$tambah=mysqli_query($koneksi,$sql1);
		
				if($tambah==true){

					echo "<div class='alert alert-success' role='alert'><center>Alat Berhasil Di Set </center></div>";
				}
				else{
				echo "<div class='alert alert-danger' role='alert'><center><span class='glyphicon glyphicon-warning-sign'></span> Gagal Set Alat!!! </center></div>";
				}
		}
		


?>


<div class="col-md-12" style="background-color:#EEEEEF;opacity:0.9; padding-bottom:10px; padding-top:10px;">
<h3>Set Alat</h3>
<br/>
<br/>
<?php
$det=mysqli_query($koneksi,"select * from setalat")or die(mysql_error());
$d=mysqli_fetch_array($det);
?>
<form action="" method="POST" class="form-horizontal">
<input type="hidden" name="id" value="<?php echo $d['no'] ?>">
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-6 control-label">Termometer 1</label>
			<div class="col-sm-6">
			<input type="text" class="form-control"   required  name="termo1" value="<?php echo $d['termo1'];?>"/>
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-6 control-label">Termometer 2</label>
			<div class="col-sm-6">
			<input type="text" class="form-control"   required  name="termo2" value="<?php echo $d['termo2'];?>"/>
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-6 control-label">Termometer 3</label>
			<div class="col-sm-6">
			<input type="text" class="form-control"   required  name="termo3" value="<?php echo $d['termo3'];?>"/>
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-6 control-label">Termometer 4</label>
			<div class="col-sm-6">
			<input type="text" class="form-control"   required  name="termo4" value="<?php echo $d['termo4'];?>"/>
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-6 control-label">Termometer 5</label>
			<div class="col-sm-6">
			<input type="text" class="form-control"   required  name="termo5" value="<?php echo $d['termo5'];?>"/>
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-6 control-label">Termometer 6</label>
			<div class="col-sm-6">
			<input type="text" class="form-control"   required  name="termo6" value="<?php echo $d['termo6'];?>"/>
			</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-12">
	<div class="form-group">
		<div class="col-md-12">
		<div class=" col-sm-6">
		<input type="submit" class="btn btn-primary col-sm-12" name="submit" value="SET">
		</div>
		<div class=" col-sm-6">
		<input type="reset" class="btn btn-default col-md-12">
		</div>
		</div>
	</div>
	</div>
</form>
<?php

?>
<div class="col-md-12" >


<?php
include 'footer.php';
		
?>