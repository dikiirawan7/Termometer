<?php
	include 'awal.php';
	$noderr=$_GET['no'];
	$sql="select * from 
			bantuiter5
			inner join itermometer5 on itermometer5.noorder = bantuiter5.noorder
			inner join pelanggan on pelanggan.noorder = bantuiter5.noorder
			where bantuiter5.noorder = '$noderr'
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
	<h3>Detail Pengamatan Termometer 5</h3>
</center>
<?php



while($d=mysqli_fetch_array($det)){
?>

	<div class="col-md-12">
		<div class="col-md-4">
			<div class="form-group">
			<label class="col-sm-3 control-label">No</label>
			<div class="col-sm-9">
			<input type="text" class="form-control col-sm-6" readonly name="noder" value="<?php echo $d['noorder']; ?>" />
			</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
			<label class="col-sm-3 control-label">Pemilik</label>
			<div class="col-sm-9">
			<input type="text" class="form-control col-sm-6" readonly name="noder" value="<?php echo $d['pemilik']; ?>" />
			</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
			<label class="col-sm-3 control-label">Set Point</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" readonly name="point"  value="<?php echo $d['setpoin']; ?>" />
			</div>
			</div>
		</div>
	</div>
	
	<table class=" col-md-12 table table-hover" >
		<tr>
			<td style="background-color:#DAB96B;"><center></center></td>
			<td style="background-color:#DAB96B;"><center><label class="control-label">S1</label></center></td>
			<td style="background-color:#DAB96B;"><center><label class="control-label">T1</label></center></td>
			<td style="background-color:#DAB96B;"> <center><label class="control-label">T2</label></center></td>
			<td style="background-color:#DAB96B;"><center><label class="control-label">S2</label></center></td>
		</tr>
		
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">1</label></center></td>
			<td><center><?php echo $d['s11']; ?></center></td>
			<td><center><?php echo $d['t1']; ?></center></td>
			<td><center><?php echo "0.0"; ?> </center></td>
			<td rowspan="2"><center><?php echo $d['s21']; ?></center></td>
		</tr>
			
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">2</label></center></td>
			<td><center><?php echo $d['s12']; ?></center></td>
			<td><center><?php echo $d['t2']; ?></center></td>
			<td><center><?php echo "0.0"; ?></center></td>
			
		</tr>
		
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">3</label></center></td>
			<td><center><?php echo $d['s13']; ?></center></td>
			<td><center><?php echo $d['t3']; ?></center></td>
			<td><center><?php echo "0.0"; ?></center></td>
			<td rowspan="2"><center><?php echo $d['s22']; ?></center></td>
		</tr>
			
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">4</label></center></td>
			<td><center><?php echo $d['s14']; ?> </center></td>
			<td><center><?php echo $d['t4']; ?> </center></td>
			<td><center><?php echo "0.0"; ?></center></td>
			
		</tr>
		
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">5</label></center></td>
			<td><center><?php echo $d['s15']; ?> </center></td>
			<td><center><?php echo $d['t5']; ?></center></td>
			<td><center><?php echo "0.0"; ?></center></td>
			<td rowspan="2"><center><?php echo $d['s23']; ?> </center></td>
		</tr>
			
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">6</label></center></td>
			<td><center><?php echo $d['s16']; ?></center></td>
			<td><center><?php echo $d['t6']; ?></center></td>
			<td><center><?php echo "0.0"; ?></center></td>
			
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3" ><center><label class="control-label">Rata-Rata</label></center></td>
			<td><center><?php echo $d['rts1']; ?></center></td>
			<td><center><?php echo $d['rtt1']; ?></center></td>
			<td><center></center></td>
			<td><center><?php echo $d['rts2']; ?></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3" ><center><label class="control-label">Koreksi Titik Nol</label></center></td>
			<td><center></center></td>
			<td><center><?php echo $d['ktnt1']; ?></center></td>
			<td><center></center></td>
			<td><center></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3" ><center><label class="control-label">Koreksi Standar</label></center></td>
			<td><center><?php echo $d['ksts1']; ?></center></td>
			<td><center></center></td>
			<td><center></center></td>
			<td><center><?php echo $d['ksts2']; ?></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3" ><center><label class="control-label">Hasil Terkoreksi</label></center></td>
			<td><center><?php echo $d['hks1']; ?></center></td>
			<td><center><?php echo $d['hkt1']; ?></center></td>
			<td><center></center></td>
			<td><center><?php echo $d['hks2']; ?></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3" ><center><label class="control-label">Koreksi Penunjukkan</label></center></td>
			<td><center></center></td>
			<td><center><?php echo $d['kpenjt1']; ?></center></td>
			<td><center></center></td>
			<td><center></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3" colspan="5"><center><label class="control-label"></label></center></td>
		</tr>
		
	</table>
	<br/>
	<br/>
	<table class=" col-md-12 table table-hover" >
		<tr>
			<td style="background-color:#DAB96B;"><center></center></td>
			<td style="background-color:#DAB96B;"><center><label class="control-label">S1</label></center></td>
			<td style="background-color:#DAB96B;"><center><label class="control-label">T1</label></center></td>
			<td style="background-color:#DAB96B;"><center><label class="control-label">S2</label></center></td>
		</tr>
		
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">Standar Deviasi</label></center></td>
			<td><center></center></td>
			<td><center><?php echo number_format($d['stdevt1'],3); ?></center></td>
			<td><center></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">Pembagi</label></center></td>
			<td><center></center></td>
			<td><center><?php echo number_format($d['pembt1sqrt'],3); ?></center></td>
			<td><center></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">Nilai Skala Terkecil</label></center></td>
			<td><center></center></td>
			<td><center><?php echo number_format($d['nstt1'],3); ?></center></td>
			<td><center></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">Pembagi</label></center></td>
			<td><center></center></td>
			<td><center><?php echo number_format($d['pembt1'],3); ?></center></td>
			<td><center></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">Ketidakpastian Standar</label></center></td>
			<td><center><?php echo number_format($d['ktksts1'],3); ?></center></td>
			<td><center></center></td>
			<td><center><?php echo number_format($d['ktksts2'],3); ?></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">Pembagi</label></center></td>
			<td><center><?php echo number_format($d['pembs1'],3); ?></center></td>
			<td><center></center></td>
			<td><center><?php echo number_format($d['pembs2'],3); ?></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">Ketidakpastian Media</label></center></td>
			<td><center><?php echo number_format($d['ktkms1'],3); ?></center></td>
			<td><center><?php echo number_format($d['ktkmt1'],3); ?></center></td>
			<td><center><?php echo number_format($d['ktkms2'],3); ?></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">Pembagi</label></center></td>
			<td><center><?php echo number_format($d['pembs12'],3); ?></center></td>
			<td><center><?php echo number_format($d['pembt1'],3); ?></center></td>
			<td><center><?php echo number_format($d['pembs22'],3); ?></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">Ketidakpastian Titik Es</label></center></td>
			<td><center><?php echo number_format($d['ktktes1'],3); ?></center></td>
			<td><center><?php echo number_format($d['ktksest1'],3); ?></center></td>
			<td><center><?php echo number_format($d['ktkses2'],3); ?></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">Pembagi</label></center></td>
			<td><center></center></td>
			<td><center><?php echo number_format($d['iat1'],3); ?></center></td>
			<td><center></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">Ketidakpastian Gabungan</label></center></td>
			<td><center></center></td>
			<td><center><?php echo number_format($d['ktgbt1'],3); ?></center></td>
			<td><center></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">faktor Cakupan</label></center></td>
			<td><center></center></td>
			<td><center><?php echo number_format($d['fct1'],3); ?></center></td>
			<td><center></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3"><center><label class="control-label">Ketidakpastian Bentangan</label></center></td>
			<td><center></center></td>
			<td><center><?php echo number_format($d['ktbet1'],3); ?></center></td>
			<td><center></center></td>
		</tr>
		<tr>
			<td style="background-color:#DAB96B;" class="col-md-3" colspan="4"><center><label class="control-label"></label></center></td>
		</tr>
		
	</table>
<?php 
}
?>
<div class="col-md-12" >


<?php
include 'footer.php';
		
?>