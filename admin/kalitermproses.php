<?php
	include 'awal.php';
	
		if(isset($_POST['submit'])){
		$noder=$_POST['noder'];
		$notermo=$_POST['notermo'];
		$s1=$_POST['s1'];
		$s2=$_POST['s2'];
		$s3=$_POST['s3'];
		$std=$_POST['std'];
		$kdr=$_POST['kdr'];
		
		$konvs11=($s1+$s2+$s3)/3;
		$konvt11=$konvs11/25.481106;
		$banvt11=$konvt11-1;
		$konvt21=(((-0.000284485*$banvt11)+(0.000098917*($banvt11*$banvt11))-$konvt11)*-1);
		$bankonvt21=(($konvt21-2.64)/1.64);
		$hsilrts1=439.932854+((472.41802*$bankonvt21)+(37.684494*($bankonvt21*$bankonvt21))+(7.472018*($bankonvt21*$bankonvt21*$bankonvt21))+(2.920828*($bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21))+(0.005184*($bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21))-(0.963864*($bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21))-(0.188732*($bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21))+(0.191203*($bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21))+(0.049025*($bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21)));
		
		$rts1=$hsilrts1;
		$korelasi=$std-$rts1;
		
		$sql1="insert into inputproseskalibrasi set noorderproses='$noder',
		noordertermo='$notermo',
		standar='$std',
		s1='$s1',
		s2='$s2',
		s3='$s3',
		rata2='$rts1',
		kodar='$kdr',
		korelasi='$korelasi'
		";
		$query=mysqli_query($koneksi,$sql1);
		header("location:tmbkalibrasi.php");
		}
		

		

	

?>
<?php

$noderr=$_GET['no'];
?>

<div class="col-md-12" style="background-color:#EEEEEF;opacity:0.9; padding-bottom:10px; padding-top:10px;">
<center>
<h3>Edit Pengamatan Termometer 1</h3>
</center>
<?php
$queryantrian=$koneksi->query("SELECT * FROM inputproseskalibrasi order by no desc") or die(mysql_error());
	$rowcountantrian=mysqli_fetch_array($queryantrian);
	$tanggal=date("d.m.y");

$det=mysqli_query($koneksi,"select * from tbhtermobaru where noordertermo='$noderr'")or die(mysql_error());
$d=mysqli_fetch_array($det);
?>

<form action="" method="POST" class="form-horizontal">

	
		<div class="col-md-12">
			<div class="form-group">
			<label class="col-sm-3 control-label">No Order</label>
			<div class="col-sm-9">
			<input type="text" class="form-control col-sm-6" readonly name="noder" value="<?php echo $tanggal.$rowcountantrian['no'];?>" />
			</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			<label class="col-sm-3 control-label">No Order Termometer</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" readonly name="notermo"  value="<?php echo $d['noordertermo']; ?>" />
			</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			<label class="col-sm-3 control-label">Standar Termometer</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="std" />
			</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			<label class="col-sm-3 control-label">Percobaan 1</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="s1" />
			</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			<label class="col-sm-3 control-label">Percobaan 2</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="s2" />
			</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			<label class="col-sm-3 control-label">Percobaan 3</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="s3" />
			</div>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
			<label class="col-sm-3 control-label">Koreksi Standar</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" name="kdr" />
			</div>
			</div>
		</div>
		
	<div class="col-md-12">
	<div class="form-group">
		<br/>
		<div class="col-md-12">
		<div class=" col-sm-6">
		
		<input type="submit" class="btn btn-primary col-sm-12" name="submit" value="Olah Data">
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