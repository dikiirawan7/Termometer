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
		
		$sql="select * from pelanggan where noorder='$noder'";
		$check=mysqli_query($koneksi,$sql);
		$jumlah=$check->num_rows;
		if($jumlah==0){
		
		$sql1="insert into pelanggan set noorder='$noder',pemilik='$ppemilik',alat='$alat',seri='$seri',erange='$erange',merk='$merek',pembuat='$pembuat',tanggal='$tanggal',pelaksana='$pelaksana',suhuruang='$suhu',kelembapan='$kelembapan'";
		$tambah=mysqli_query($koneksi,$sql1);
		
		header("location:index.php");
		}}
		

		

	$queryantrian=$koneksi->query("SELECT * FROM pelanggan order by no desc") or die(mysql_error());
	$rowcountantrian=mysqli_fetch_array($queryantrian);
	$tanggal=date("d.m.y");

?>

<div class="col-md-12" style="background-color:#EEEEEF;opacity:0.9; padding-bottom:10px; padding-top:10px;">
<h3>Data Pelanggan</h3>
<br/>
<br/>
<form action="" method="POST" class="form-horizontal">
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">No. Order</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" readonly required placeholder="No. Order" name="noder" value="<?php echo $tanggal.$rowcountantrian['no'];?>"/>
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Pemilik</label>
			<div class="col-sm-9">
			<input type="text" class="form-control col-sm-6" name="pemilik" required placeholder="VANIA RAISA"/>
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Nama Alat</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="alat" required placeholder="Glass Thermometer" />
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">no.Seri/kode</label>
			<div class="col-sm-9" >
			<input type="text" class="form-control col-sm-6" name="seri" required placeholder="9996260  /  -" />
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Range/Scale</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="erange" required placeholder="95  up to  155  /  0.2" />
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Merek</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="merek" required placeholder="ASTM 67C" />
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Pembuat</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="pembuat" required placeholder="-"/>
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Pelaksana</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="pelaksana" required placeholder="moh toha"/>
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Tgl Kalibrasi</label>
			<div class="col-sm-9">
			<input type="date" class="form-control" name="tanggal" required/>
			</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Kelembapan</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" name="kelembapan" placeholder="24"/>
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Suhu Ruangan</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="suhu" placeholder="62"/>
			</div>
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