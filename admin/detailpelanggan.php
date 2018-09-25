<?php
	include 'awal.php';
	$noderr=$_GET['no'];
	$sql="select * from pelanggan	where noorder = '$noderr'
			";
	$det=mysqli_query($koneksi,$sql)or die(mysql_error());

?>
<?php


?>
<div class="col-md-12" style="background-color:#EEEEEF;opacity:0.9; padding-bottom:10px; padding-top:10px;">
<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Pelanggan</h3>
<a class="btn" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php



while($d=mysqli_fetch_array($det)){
?>

<table class="col-md-12">
	<tr>
			<td style="background-color:skyblue;"><center></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;padding-top:5px;" class="col-md-3"><center><label class="control-label">No Order</label></center></td>
			<td style="padding-top:5px;"><center><?php echo $d['noorder']; ?></center></td>
			<td style="background-color:skyblue;padding-top:5px;" class="col-md-3"><center><label class="control-label">Tanggal</label></center></td>
			<td style="padding-top:5px;"><center><?php $date=$d['tanggal'];
									$tanggal=date('d-m-Y',strtotime($date));
									echo $tanggal;?></center></td>
			<td style="background-color:skyblue;padding-top:5px;color:skyblue">hh <center><label class="control-label"></label></center></td>
		</tr>
		<tr>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
		</tr>
		<tr>
			<td style="background-color:skyblue;padding-top:5px;" class="col-md-3"><center><label class="control-label">Pemilik</label></center></td>
			<td style="padding-top:5px;"><center><?php echo $d['pemilik']; ?></center></td>
			<td style="background-color:skyblue;padding-top:5px;" class="col-md-3"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;padding-top:5px;" colspan="3"><center></center></td>

		</tr>
		
		<tr>
			<td style="background-color:skyblue;"><center></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;padding-top:5px;" class="col-md-3"><center><label class="control-label">Nama Alat</label></center></td>
			<td style="padding-top:5px;"><center><?php echo $d['alat']; ?></center></td>
			<td style="background-color:skyblue;padding-top:5px;" class="col-md-3"><center><label class="control-label">Pelaksana Kalibrasi</label></center></td>
			<td style="padding-top:5px;"><center><?php echo $d['pelaksana']; ?></center></td>
			<td style="background-color:skyblue;padding-top:5px;color:skyblue">hh <center><label class="control-label"></label></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;"><center></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;padding-top:5px;" class="col-md-3"><center><label class="control-label">No. Seri/Kode</label></center></td>
			<td style="padding-top:5px;"><center><?php echo $d['seri']; ?></center></td>
			<td style="background-color:skyblue;padding-top:5px;" class="col-md-3"><center><label class="control-label">Suhu Ruang</label></center></td>
			<td style="padding-top:5px;"><center><?php echo $d['suhuruang']; ?></center></td>
			<td style="background-color:skyblue;padding-top:5px;color:skyblue">hh <center><label class="control-label"></label></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;"><center></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;padding-top:5px;" class="col-md-3"><center><label class="control-label">Range/scale</label></center></td>
			<td style="padding-top:5px;"><center><?php echo $d['erange']; ?></center></td>
			<td style="background-color:skyblue;padding-top:5px;" class="col-md-3"><center><label class="control-label">Kelembapan</label></center></td>
			<td style="padding-top:5px;"><center><?php echo $d['kelembapan']; ?></center></td>
			<td style="background-color:skyblue;padding-top:5px;color:skyblue">hh <center><label class="control-label"></label></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;"><center></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;padding-top:5px;" class="col-md-3"><center><label class="control-label">Merk/Type</label></center></td>
			<td style="padding-top:5px;"><center><?php echo $d['merk']; ?></center></td>
			<td style="background-color:skyblue;padding-top:5px;" class="col-md-3"><center><label class="control-label">Pembuat</label></center></td>
			<td style="padding-top:5px;"><center><?php echo $d['pembuat']; ?></center></td>
			<td style="background-color:skyblue;padding-top:5px;color:skyblue">hh <center><label class="control-label"></label></center></td>
		</tr>
		<tr>
			<td style="background-color:skyblue;"><center></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label"></label></center></td>
		</tr>
	
	
	
<?php 
}
?>
</table>

<div class="col-md-12" style="">
<br/>
<br/>

</div>

<?php
include 'footer.php';
		
?>