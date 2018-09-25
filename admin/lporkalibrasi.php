<?php
	include 'awal.php';
	$noderr=$_GET['no'];
	$sql="select * from 
			itermometer1
			inner join pelanggan on pelanggan.noorder = itermometer1.noorder
			where itermometer1.noorder = '$noderr'
			";
	$det=mysqli_query($koneksi,$sql)or die(mysql_error());
	
?>
<?php


?>

<div class="col-md-12" style="background-color:#EEEEEF;opacity:0.9; padding-bottom:10px; padding-top:10px;">
<center>
	<a style="margin-bottom:10px;margin-left:2px; background-color:skyblue; border-color:skyblue" href="detailtermometer1.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Termometer 1</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:Green; border-color:Green" href="detailtermometer2.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Termometer 2</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:#E95A6F; border-color:#E95A6F" href="detailtermometer3.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Termometer 3</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:#203A49; border-color:#203A49" href="detailtermometer4.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Termometer 4</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:#DAB96B; border-color:#DAB96B" href="detailtermometer5.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Termometer 5</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:#008FD7; border-color:#008FD7" href="detailtermometer6.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Termometer 6</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:#1CB5BF; border-color:#1CB5BF" href="lporkalibrasi.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Laporan Hasil Kalibrasi</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:gray; border-color:gray" href="chart.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Chart</a>
<h3>Laporan Hasil Kalibrasi</h3>
</center>
<?php

while($d=mysqli_fetch_array($det)){
?>

	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">No Order</label>
			<div class="col-sm-9">
			<input type="text" class="form-control col-sm-6" readonly name="noder" value="<?php echo $d['noorder']; ?>" />
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			<label class="col-sm-3 control-label">Pemilik</label>
			<div class="col-sm-9">
			<input type="text" class="form-control col-sm-6" readonly name="noder" value="<?php echo $d['pemilik']; ?>" />
			</div>
			</div>
		</div>
	</div>
<?php 
}
?>
	<br/>
	<br/>
	
		<br/>
	<br/>
	


<table class=" col-md-12 table table-hover">
		<tr>
			<td style="background-color:#008FD7;color:white;"><center><label class="control-label">No</label></center></td>
			<td style="background-color:#008FD7;color:white;"><center><label class="control-label">Pembacaan Standar</label></center></td>
			<td style="background-color:#008FD7;color:white;"> <center><label class="control-label">Data T1</label></center></td>
			<td style="background-color:#008FD7;color:white;"><center><label class="control-label">Data Koreksi</label></center></td>
			<td style="background-color:#008FD7;color:white;"><center><label class="control-label">Data Ue</label></center></td>
		</tr>
		
		
<?php
	$sql7="select*from hkalibrasi where noorder like '$noderr'";
	$kalibras=mysqli_query($koneksi,$sql7)or die(mysql_error());

$x=1;

while($d=mysqli_fetch_array($kalibras)){
?>
		<tr>
		
			<td><center><?php echo $x++; ?></center></td>
			<td><center><?php echo number_format($d['pdar'],2); ?></center></td>
			<td><center><?php echo number_format($d['dat1'],2); ?></center></td>
			<td><center><?php echo number_format($d['dacor'],2); ?></center></td>
			<td><center><?php echo number_format($d['daue'],2); ?></center></td>
		</tr>
			
		
		

	<?php 
}
?>
		<tr>
		<td style="background-color:#008FD7;color:white;" colspan="5"><center><label class="control-label"></label></center></td>
		</tr>
	</table>

	<br/>
	<br/>
<center>	<h3></h3></center>
	<br/>
<table class=" col-md-12 table table-hover">
		<tr>
			<td style="background-color:#008FD7;color:white;"><center><label class="control-label">No</label></center></td>
			<td style="background-color:#008FD7;color:white; " ><center><label class="control-label">Alat</label></center></td>
			<td style="background-color:#008FD7;color:white;" colspan="2"> <center><label class="control-label">Standar</label></center></td>
			<td style="background-color:#008FD7;color:white;"><center><label class="control-label">K=2</label></center></td>
		</tr>
		
		
<?php
	$sql9="select*from hkalibrasi where noorder like '$noderr'";
	$kalibras9=mysqli_query($koneksi,$sql9)or die(mysql_error());

$x=1;
while($d=mysqli_fetch_array($kalibras9)){
?>
		<tr>
		
			<td><center><?php echo $x++; ?></center></td>
			<td><center><?php echo number_format($d['point'],2); ?></center></td>
			<td><center><?php echo number_format($d['ddar1'],2); ?></center></td>
			<td><center><?php echo number_format($d['ddar2'],3); ?></center></td>
			<td><center><?php echo number_format($d['daue'],3); ?></center></td>
		</tr>
			
		
		

	<?php 
}
?>
<tr>
			<td style="background-color:#008FD7;color:white;"><center><label class="control-label"></label></center></td>
			<td style="background-color:#008FD7;color:white; " ><center><label class="control-label"></label></center></td>
			<td style="background-color:#008FD7;color:white;" colspan="2"> <center><label class="control-label"></label></center></td>
			<td style="background-color:#008FD7;color:white;"><center><label class="control-label"></label></center></td>
		</tr>
	</table>

<div class="col-md-12" >


<?php
include 'footer.php';
		
?>