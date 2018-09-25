<?php
	include 'awal.php';
	
		if(isset($_POST['submit'])){
		$noder=$_POST['noder'];
		$noderplg=$_POST['noderplg'];
		$settermo=$_POST['settermo'];
		$tanggal=$_POST['tanggal'];
		
		
		$sql1="insert into tbhtermobaru set noordertermo='$noder',noorder='$noderplg',setpoint='$settermo',tglkali='$tanggal'
		";
		$tambah=mysqli_query($koneksi,$sql1);
		
		header("location:tmbkalibrasi.php");
		}
		

		

	$queryantrian=$koneksi->query("SELECT * FROM tbhtermobaru order by no desc") or die(mysql_error());
	$rowcountantrian=mysqli_fetch_array($queryantrian);
	$tanggal=date("d.m.y");

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
			<input type="text" class="form-control" readonly required placeholder="No. Order" name="noder" value="<?php echo $tanggal.$rowcountantrian['no'];?>"/>
			</div>
			</div>
		
	</div>
	<div class="col-md-12">
		
			<div class="form-group">
			<label class="col-sm-3 control-label">No. Order Pelanggan</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" required placeholder="No. Order" name="noderplg" />
			</div>
			
		</div>
	</div>
	<div class="col-md-12">
		
			<div class="form-group">
			<label class="col-sm-3 control-label">Set Termometer</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" required placeholder="100" name="settermo" />
			</div>
			
		</div>
	</div>
	<div class="col-md-12">
			<div class="form-group">
			<label class="col-sm-3 control-label">Tgl Kalibrasi</label>
			<div class="col-sm-9">
			<input type="date" class="form-control" name="tanggal" required/>
			</div>
			</div>
		</div>
	
	
	<div class="col-md-12">
	<div class="form-group">
		<div class="col-md-12">
		<div class=" col-sm-6">
		<input type="submit" class="btn btn-primary col-sm-12" name="submit" value="Tambah">
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