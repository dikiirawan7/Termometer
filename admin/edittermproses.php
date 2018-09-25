<?php
	include 'awal.php';
	$noderr=$_GET['no'];	
		if(isset($_POST['submit'])){
		$noder=$_POST['noder'];
		$noderplg=$_POST['noderplg'];
		$settermo=$_POST['settermo'];
		$tanggal=$_POST['tanggal'];
		
		
		$sql1="update tbhtermobaru set noorder='$noderplg',setpoint='$settermo',tglkali='$tanggal'
		where noordertermo='$noder'
		";
		$tambah=mysqli_query($koneksi,$sql1);
		
		header("location:tmbkalibrasi.php");
		}
		

		

	$queryantrian=$koneksi->query("SELECT * FROM tbhtermobaru where noordertermo='$noderr'") or die(mysql_error());
	$rowcountantrian=mysqli_fetch_array($queryantrian);

?>

<div class="col-md-12" style="background-color:#EEEEEF;opacity:0.9; padding-bottom:10px; padding-top:10px;">
<h3>Data Termometer</h3>
<br/>
<br/>
<form action="" method="POST" class="form-horizontal">
	
	<div class="col-md-12">
		
			<div class="form-group">
			<label class="col-sm-3 control-label">No. Order Termometer</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" readonly required placeholder="No. Order" name="noder" value="<?php echo $rowcountantrian['noordertermo'];?>"/>
			</div>
			</div>
		
	</div>
	<div class="col-md-12">
		
			<div class="form-group">
			<label class="col-sm-3 control-label">No. Order Pelanggan</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" readonly required placeholder="No. Order" name="noderplg" value="<?php echo $rowcountantrian['noorder'];?>"/>
			</div>
			
		</div>
	</div>
	<div class="col-md-12">
		
			<div class="form-group">
			<label class="col-sm-3 control-label">Set Termometer</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" required placeholder="100" name="settermo" value="<?php echo $rowcountantrian['setpoint'];?>"/>
			</div>
			
		</div>
	</div>
	<div class="col-md-12">
			<div class="form-group">
			<label class="col-sm-3 control-label">Tgl Kalibrasi</label>
			<div class="col-sm-9">
			<input type="date" class="form-control" name="tanggal" required value="<?php echo $rowcountantrian['tglkali'];?>"/>
			</div>
			</div>
		</div>
	
	
	<div class="col-md-12">
	<div class="form-group">
		<div class="col-md-12">
		<div class=" col-sm-6">
		<input type="submit" class="btn btn-primary col-sm-12" name="submit" value="Update">
		</div>
		<div class=" col-sm-6">
		<input type="reset" class="btn btn-default col-md-12">
		</div>
		</div>
	</div>
	</div>
</form>

<div class="col-md-12" >


<?php
include 'footer.php';
		
?>