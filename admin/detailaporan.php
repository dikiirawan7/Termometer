<?php
	include 'awal.php';
	$noderr=$_GET['no'];
	$sql="select * from inputproseskalibrasi where noordertermo = '$noderr'	";
	$det=mysqli_query($koneksi,$sql)or die(mysql_error());

?>
<?php


?>

<div class="col-md-12" style="background-color:#EEEEEF;opacity:0.9; padding-bottom:10px; padding-top:10px;">
<center>
	<a style="margin-bottom:10px;margin-left:2px; background-color:#1CB5BF; border-color:#1CB5BF" href="detailaporan.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Laporan Hasil Kalibrasi</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:gray; border-color:gray" href="laporankorelasi.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Laporan Korelasi</a>
	<h3>Detail Laporan</h3>
</center>
<table class=" col-md-12 table table-hover" >
		<tr>
			<td style="background-color:skyblue;"><center><label class="control-label">Standar</label></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label">Percobaan 1</label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label">Percobaan 2</label></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label">Percobaan 3</label></center></td>
		</tr>
<?php



while($d=mysqli_fetch_array($det)){
?>

	
	
		
		<tr>
			<td><center><?php echo $d['standar']; ?></center></td>
			<td><center><?php echo $d['s1']; ?></center></td>
			<td><center><?php echo $d['s2']; ?></center></td>
			<td><center><?php echo $d['s3']; ?></center></td>
			
		</tr>		
	
<?php 
}
?>
</table>
	<br/>
<div class="col-md-12" >


<?php
include 'footer.php';
		
?>