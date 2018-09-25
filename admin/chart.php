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
<div class="container" style="width: 60%;margin: 15px auto;">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
<?php
	$sql7="select*from hkalibrasi where noorder like '%$noderr%' order by point asc";
	$kalibras=mysqli_query($koneksi,$sql7)or die(mysql_error());
	$sql4="select*from hkalibrasi where noorder like '%$noderr%' order by point asc";
	$kalibras4=mysqli_query($koneksi,$sql4)or die(mysql_error());
?>


 <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php while ($b = mysqli_fetch_array($kalibras)) { echo '"' . number_format($b['dat1'],2) . '",';}?>],
                    datasets: [{
                            label: '#Chart Termometer  ',
                            data: [<?php while ($b = mysqli_fetch_array($kalibras4)) { echo '"' . number_format($b['pdar'],2) . '",';}?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
<div class="col-md-12" >


<?php
include 'footer.php';
		
?>