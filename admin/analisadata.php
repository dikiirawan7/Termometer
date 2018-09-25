<?php
	include 'awal.php';
	
?>

<div class="col-md-12" style="background-color:#EEEEEF;opacity:0.9; padding-bottom:10px; padding-top:10px;">
<h3>Analisa Olah Data</h3>
<br/>
<br/>

<?php
//untuk membuat jumlah record dan halaman

$per_hal=10;
$sql="select * from 
			bantuiter1
			inner join bantuiter2 on bantuiter2.noorder = bantuiter1.noorder
			inner join bantuiter3 on bantuiter3.noorder = bantuiter1.noorder
			inner join bantuiter4 on bantuiter4.noorder = bantuiter1.noorder
			inner join bantuiter5 on bantuiter5.noorder = bantuiter1.noorder
			inner join bantuiter6 on bantuiter6.noorder = bantuiter1.noorder
			inner join pelanggan on pelanggan.noorder = bantuiter1.noorder";
$jumlah_record=mysqli_query($koneksi,$sql);
$jum=mysqli_num_rows($jumlah_record);
$halaman=ceil($jum/$per_hal);
$page=(isset($_GET['page']))?(int)$_GET['page']:1;
$start=($page-1)*$per_hal;
?>
<div class="col-md-12" >
	<table class="col-md-2">
		<tr>
			<td>Jumlah Pelanggan</td>
			<td><?php echo $jum;?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>
			<td><?php echo $halaman;?></td>
		</tr>
	</table>


<form action="" method="Post">
	<div class="input-group col-md-5 col-md-offset-7">
	<span class="input-group-addon" id="basic-addon">
	<span class="glyphicon glyphicon-search"></span></span>

	<input type="text" class="form-control" placeholder="Cari Data Peserta...." aria-describedby="basic-addon1" name="cari">
	</div>
</form>
<br/>
<table class="table table-hover" >
	<tr>
		<th class="col-md-1"><center>No Order</center></th>
		<th class="col-md-2"><center>Pemilik</center></th>
		<th class="col-md-1"><center>Koreksi T1</center></th>
		<th class="col-md-1"><center>Koreksi T2</center></th>
		<th class="col-md-1"><center>Koreksi T3</center></th>
		<th class="col-md-1"><center>Koreksi T4</center></th>
		<th class="col-md-1"><center>Koreksi T5</center></th>
		<th class="col-md-1"><center>Koreksi T6</center></th>
		<th class="col-md-3"><center>Opsi</center></th>
	</tr>
	<?php
		if(isset($_POST['cari'])){
			$cari=$_POST['cari'];
			
			$psrt=$koneksi->query("
			select * from 
			bantuiter1
			inner join bantuiter2 on bantuiter2.noorder = bantuiter1.noorder
			inner join bantuiter3 on bantuiter3.noorder = bantuiter1.noorder
			inner join bantuiter4 on bantuiter4.noorder = bantuiter1.noorder
			inner join bantuiter5 on bantuiter5.noorder = bantuiter1.noorder
			inner join bantuiter6 on bantuiter6.noorder = bantuiter1.noorder
			inner join pelanggan on pelanggan.noorder = bantuiter1.noorder
			where bantuiter1.noorder like '%$cari%' or pelanggan.pemilik like '%$cari%'
			");
			}
			else{
				$psrt=mysqli_query($koneksi,"select bantuiter1.noorder,bantuiter1.koreksit1,bantuiter2.koreksit2,bantuiter3.koreksit3,bantuiter4.koreksit4,bantuiter5.koreksit5,bantuiter6.koreksit6,pelanggan.pemilik
				from ((((((bantuiter1
				inner join bantuiter2 on bantuiter2.noorder = bantuiter1.noorder)
				inner join bantuiter3 on bantuiter3.noorder = bantuiter1.noorder)
				inner join bantuiter4 on bantuiter4.noorder = bantuiter1.noorder)
				inner join bantuiter5 on bantuiter5.noorder = bantuiter1.noorder)
				inner join bantuiter6 on bantuiter6.noorder = bantuiter1.noorder)
				inner join pelanggan on pelanggan.noorder = bantuiter1.noorder)");
				
				
			
		}
		if ($psrt === FALSE) {
 	   die(mysqli_error());
			}
		$nom=1;
		while($b=mysqli_fetch_array($psrt)) {
			?>
				<tr>
					<td><center><?php echo $b['noorder'];?></center></td>
					<td><center><?php echo $b['pemilik'];?></center></td>
					<td><center><?php
					$koma2=number_format($b['koreksit1'],2);
					echo $koma2;
					?></center></td>
					<td><center><?php 
					$koma2=number_format($b['koreksit2'],2);
					echo $koma2;
					?></center></td>
					<td><center><?php 
					$koma2=number_format($b['koreksit3'],2);
					echo $koma2;
					?></center></td>
					<td><center><?php
					$koma2=number_format($b['koreksit4'],2);
					echo $koma2;
					?></center></td>
					<td><center><?php
					$koma2=number_format($b['koreksit5'],2);
					echo $koma2;
					?></center></td>
					<td><center><?php
					$koma2=number_format($b['koreksit6'],2);
					echo $koma2;
					?></center></td>
					<td><center>
						<a href="detailtermometer1.php?no=<?php echo $b['noorder'];?>" class="btn btn-info">Detail</a>
						<a href="edittermometer1.php?no=<?php echo $b['noorder'];?>" class="btn btn-warning">Edit</a>
						<a onclick="if(confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')){location.href='hapusanalisa.php?no=<?php echo $b['noorder'];?>'}" class="btn btn-danger">Hapus</a></center>

					</td>
				</tr>
				<?php
			}
	?>
</table>
<?php
//membuat page yang ada dibawah
?>

<ul class="pagination">
	<?php
		for($x=1;$x<=$halaman;$x++){
		?>
		<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a>
		</li>
		<?php	
		}
	?>
</ul>


<?php
include 'footer.php';
?>