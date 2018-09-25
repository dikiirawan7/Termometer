<?php
	include 'awal.php';
	
?>

<div class="col-md-12" style="background-color:#EEEEEF;opacity:0.9; padding-bottom:10px; padding-top:10px;">
<h3>Data Pelanggan</h3>
<a href="tambahpelanggan.php" style="margin-bottom:20px" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Pelanggan</a>
<br/>
<br/>

<?php
//untuk membuat jumlah record dan halaman

$per_hal=10;
$sql="select * from pelanggan";
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


<form action="" method="post">
	<div class="input-group col-md-5 col-md-offset-7">
	<span class="input-group-addon" id="basic-addon">
	<span class="glyphicon glyphicon-search"></span></span>

	<input type="text" class="form-control" placeholder="Cari Data Peserta...." aria-describedby="basic-addon1" name="cari">
	</div>
</form>
<br/>
<table class="table table-hover" >
	<tr>
		<th class="col-md-1"><center>No</center></th>
		<th class="col-md-2"><center>No Order</center></th>
		<th class="col-md-1"><center>Pemilik</center></th>
		<th class="col-md-2"><center>Alat</center></th>
		<th class="col-md-2"><center>Tanggal Kalibras</center></th>
		<th class="col-md-3"><center>Opsi</center></th>
	</tr>
	<?php
		if(isset($_POST['cari'])){
			$cari=$_POST['cari'];
			

			$psrt=$koneksi->query("select * from pelanggan where noorder like '%$cari%'");

			}
			else{
				$psrt=mysqli_query($koneksi,"select * from pelanggan limit $start,$per_hal");
			
		}
		if ($psrt === FALSE) {
 	   die(mysqli_error());
			}
		$nom=1;
		while($b=mysqli_fetch_array($psrt)) {
			?>
				<tr>
					<td><center><?php echo $nom++;?></center></td>
					<td><center><?php echo $b['noorder'];?></center></td>
					<td><center><?php echo $b['pemilik'];?></center></td>
					<td><center><?php echo $b['alat'];?></center></td>
					<td><center><?php $date=$b['tanggal'];
									$tanggal=date('d-m-Y',strtotime($date));
									echo $tanggal;
					?></center></td>
					<td><center>
						<a href="detailpelanggan.php?no=<?php echo $b['noorder'];?>" class="btn btn-info">Detail</a>
						<a href="editpelanggan.php?no=<?php echo $b['noorder'];?>" class="btn btn-warning">Edit</a>
						<a onclick="if(confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')){location.href='hapuspelanggan.php?no=<?php echo $b['noorder'];?>'}" class="btn btn-danger">Hapus</a></center>

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