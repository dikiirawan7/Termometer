<?php
	include 'awal.php';
	
		if(isset($_POST['submit'])){
		$noder=$_POST['noder'];
		$ppemilik=$_POST['pemilik'];
		$alat=$_POST['alat'];
		$seri=$_POST['seri'];
		$erange=$_POST['erange'];
		$merek=$_POST['merek'];
		$pembuat=$_POST['pembuat'];	
		$tanggal=$_POST['tanggal'];
		$pelaksana=$_POST['pelaksana'];
		$suhu=$_POST['suhu'];
		$kelembapan=$_POST['kelembapan'];
				
		
		$sql1="update pelanggan set pemilik='$ppemilik',alat='$alat',seri='$seri',erange='$erange',merk='$merek',pembuat='$pembuat',tanggal='$tanggal',pelaksana='$pelaksana',suhuruang='$suhu',kelembapan='$kelembapan' 
		where noorder='$noder'
		";
		$tambah=mysqli_query($koneksi,$sql1);
		
		header("location:index.php");
		}
		

		

?>

<?php

$noderr=$_GET['no'];
?>

<div class="col-md-12" style="background-color:#EEEEEF;opacity:0.9; padding-bottom:10px; padding-top:10px;">
<h3>Data Pelanggan</h3>
<br/>
<br/>
<?php
$det=mysqli_query($koneksi,"select * from pelanggan where noorder='$noderr'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
?>
<form action="" method="POST" class="form-horizontal">
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">No. Order</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" readonly required  name="noder" value="<?php echo $d['noorder'];?>"/>
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Pemilik</label>
			<div class="col-sm-9">
			<input type="text" class="form-control col-sm-6" name="pemilik" required value="<?php echo $d['pemilik'];?>"/>
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Nama Alat</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="alat" required value="<?php echo $d['alat'];?>" />
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">no.Seri/kode</label>
			<div class="col-sm-9" >
			<input type="text" class="form-control col-sm-6" name="seri" required value="<?php echo $d['seri'];?>" />
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Range/Scale</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="erange" required value="<?php echo $d['erange'];?>" />
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Merek</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="merek" required value="<?php echo $d['merk'];?>" />
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Pembuat</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="pembuat" required value="<?php echo $d['pembuat'];?>"/>
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Pelaksana</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="pelaksana" required value="<?php echo $d['pelaksana'];?>"/>
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Tgl Kalibrasi</label>
			<div class="col-sm-9">
			<input type="date" class="form-control" name="tanggal" value="<?php echo $d['tanggal'];?>" required/>
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Kelembapan</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" name="kelembapan" value="<?php echo $d['kelembapan'];?>"/>
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Suhu Ruangan</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="suhu" value="<?php echo $d['suhuruang'];?>"/>
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
	<div class="form-group">
		<div class="col-md-12">
		<div class=" col-sm-6">
		<input type="submit" class="btn btn-primary col-sm-12" name="submit" value="Ubah">
		</div>
		<div class=" col-sm-6">
		<input type="reset" class="btn btn-default col-md-12">
		</div>
		</div>
	</div>
	</div>
</form>
<?php
}
?>
<div class="col-md-12" >


<?php
include 'footer.php';
		
?>