<?php
	include 'awal.php';
	
		if(isset($_POST['submit'])){
		$noder=$_POST['noder'];
		$point=$_POST['point'];
		$s1=$_POST['s1'];
		$s2=$_POST['s2'];
		$s3=$_POST['s3'];
		$s4=$_POST['s4'];
		$s5=$_POST['s5'];
		$s6=$_POST['s6'];
		$t1=$_POST['t1'];
		$t2=$_POST['t2'];
		$t3=$_POST['t3'];
		$t4=$_POST['t4'];
		$t5=$_POST['t5'];
		$t6=$_POST['t6'];
		$s21=$_POST['s21'];
		$s22=$_POST['s22'];
		$s23=$_POST['s23'];
		
		$ktnt1=$_POST['ktnt1'];
		$ksts1=$_POST['ksts1'];
		$ksts2=$_POST['ksts2'];
		$nstt1=$_POST['nstt1'];	
		$pembt1=$_POST['pembt1'];
		$ktksts1=$_POST['ktksts1'];
		$ktksts2=$_POST['ktksts2'];
		$pembs1=$_POST['pembs1'];
		$ktkms1=$_POST['ktkms1'];
		$pembs12=$_POST['pembs12'];
		$ktktes1=$_POST['ktktes1'];
		$fct1=$_POST['fct1'];
		$iat1=$_POST['iat1'];
		
		//penghubung termo dengan bantuitermometer sprt
		$konvs11=($s1+$s2+$s3+$s4+$s5+$s6)/6;
		$konvs12=($s21+$s22+$s23)/3;
		
		$konvt11=$konvs11/25.481106;
		$konvt12=$konvs12/25.481106;
		
		//bantu konvt1
		$banvt11=$konvt11-1;
		$banvt12=$konvt12-1;
		
		$konvt21=(((-0.000284485*$banvt11)+(0.000098917*($banvt11*$banvt11))-$konvt11)*-1);
		$konvt22=(((-0.000284485*$banvt12)+(0.000098917*($banvt12*$banvt12))-$konvt12)*-1);
		
		//bantu konvt21
		$bankonvt21=(($konvt21-2.64)/1.64);
		$bankonvt22=(($konvt22-2.64)/1.64);
		
		//mencari rata2 s1 dan s2
		$hsilrts1=439.932854+((472.41802*$bankonvt21)+(37.684494*($bankonvt21*$bankonvt21))+(7.472018*($bankonvt21*$bankonvt21*$bankonvt21))+(2.920828*($bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21))+(0.005184*($bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21))-(0.963864*($bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21))-(0.188732*($bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21))+(0.191203*($bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21))+(0.049025*($bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21*$bankonvt21)));
		$hsilrts2=439.932854+((472.41802*$bankonvt22)+(37.684494*($bankonvt22*$bankonvt22))+(7.472018*($bankonvt22*$bankonvt22*$bankonvt22))+(2.920828*($bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22))+(0.005184*($bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22))-(0.963864*($bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22))-(0.188732*($bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22))+(0.191203*($bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22))+(0.049025*($bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22*$bankonvt22)));
		
		//bantu stdev
		//tahap 1
		$ratat1=($t1+$t2+$t3+$t4+$t5+$t6)/6;
		//tahap 2
		$t1set=$t1-$ratat1;
		$t2set=$t2-$ratat1;
		$t3set=$t3-$ratat1;
		$t4set=$t4-$ratat1;
		$t5set=$t5-$ratat1;
		$t6set=$t6-$ratat1;
		//tahap 3
		$t1setdrat=$t1set*$t1set;
		$t2setdrat=$t2set*$t2set;
		$t3setdrat=$t3set*$t3set;
		$t4setdrat=$t4set*$t4set;
		$t5setdrat=$t5set*$t5set;
		$t6setdrat=$t6set*$t6set;
		
		//tahap 4
		$jumt1drat=$t1setdrat+$t2setdrat+$t3setdrat+$t4setdrat+$t5setdrat+$t6setdrat;
		
		//tahap5
		$hsilt1=$jumt1drat/5;
		
		//tahap 6
		$akarhsilt1=number_format(sqrt($hsilt1),6);
		
		$pembt1sq=5;
		
		//bantuitermometer
		$rts1=$hsilrts1;
		$rtt1=($t1+$t2+$t3+$t4+$t5+$t6)/6;
		$rts2=$hsilrts2;
		$hks1=$hsilrts1+$ksts1;
		$hkt1=$rtt1+$ktnt1;
		$hks2=$rts2+$ksts2;
		$kpenjt1=(($hks1+$hks2)/2)-$hkt1;
		$stdevt1=$akarhsilt1;
		$pembt1sqrt=number_format(sqrt($pembt1sq),6);
		$pembs2=$pembs1;
		$ktkmt1=$ktkms1;
		$ktkms2=$ktkms1;
		$pembt12=$pembs12;
		$pembs22=$pembs12;
		$ktksest1=$ktktes1;
		$ktkses2=$ktktes1;
		
		//bantu ktgbt1
		$akar3=number_format(sqrt(3),6);
		$btktgbt1=(($stdevt1/$pembt1sqrt)*($stdevt1/$pembt1sqrt))+((($nstt1/$pembt1)/$akar3)*(($nstt1/$pembt1)/$akar3))+(($ktksts1/$pembs1)*($ktksts1/$pembs1))+(($ktksts2/$pembs22)*($ktksts2/$pembs22))+(($ktkmt1/$pembt12)*($ktkmt1/$pembt12))+(($ktksest1/$iat1)*($ktksest1/$iat1));
		$akarbtktgbt1=number_format(sqrt($btktgbt1),6);
		
		$ktgbt1=$akarbtktgbt1;
		$ktbet1=$ktgbt1*$fct1;
		
		//hasil kalibrasi
		$pdar=($hks1+$hks2)/2;
		$dat1=$hkt1;
		$dacor=$pdar-$dat1;
		$daue=$ktbet1;
		$ddar1=(((0-$pdar)/(0-$dat1))*($point-$pdar))+$dat1;
		$ddar2=$point-$ddar1;
		
		//sampai nstt1
		
		$sql1=" update itermometer1 set setpoin='$point',s11='$s1',s12='$s2',s13='$s3',s14='$s4',s15='$s5',s16='$s6',t1='$t1',t2='$t2',t3='$t3',t4='$t4',t5='$t5',t6='$t6',s21='$s21',s22='$s22',s23='$s23',ktnt1='$ktnt1',
		ksts1='$ksts1',
		ksts2='$ksts2',
		nstt1='$nstt1',	
		pembt1='$pembt1',
		ktksts1='$ktksts1',
		ktksts2='$ktksts2',
		pembs1='$pembs1',
		ktkms1='$ktkms1',
		pembs12='$pembs12',
		ktktes1='$ktktes1',
		fct1='$fct1',
		iat1='$iat1' where noorder='$noder'";
		$bantutambah=mysqli_query($koneksi,$sql1);
		
		$sql2="update bantuiter1 set
		point='$point',
		rts1='$rts1',
		rtt1='$rtt1',
		rts2='$rts2',
		hks1='$hks1',
		hkt1='$hkt1',
		hks2='$hks2',
		kpenjt1='$kpenjt1',
		stdevt1='$stdevt1',
		pembt1sqrt='$pembt1sqrt',
		pembs2='$pembs2',
		ktkmt1='$ktkmt1',
		ktkms2='$ktkms2',
		pembt1='$pembt12',
		pembs22='$pembs22',
		ktksest1='$ktksest1',
		ktkses2='$ktkses2',
		ktgbt1='$ktgbt1',
		ktbet1='$ktbet1',
		koreksit1='$dacor'
		where noorder='$noder'
		";
		
		$bantutambah2=mysqli_query($koneksi,$sql2);
		
		$sql33="select * from hkalibrasi where noorder='$noder' and point='$point'";
		$result=mysqli_query($koneksi,$sql33);
		$hasil=mysqli_fetch_array($result);
		$order=$hasil['noorder'];
		$settt=$hasil['point'];
		if(($noder==$order)&&($point==$settt)){
		$sql4="update hkalibrasi set
		pdar='$pdar',
		dat1='$dat1',
		dacor='$dacor',
		daue='$daue',
		ddar1='$ddar1',
		ddar2='$ddar2'
		where noorder='$noder' and point='$point'
		";
		
		$hkalibrasi=mysqli_query($koneksi,$sql4);
		}
		else{
		$sql5="insert into hkalibrasi set
		noorder='$noder',
		point='$point',
		pdar='$pdar',
		dat1='$dat1',
		dacor='$dacor',
		daue='$daue',
		ddar1='$ddar1',
		ddar2='$ddar2'
		";
		$hkalibrasi=mysqli_query($koneksi,$sql5);
		
		}
		
		header("location:analisadata.php");
		
		if(!$bantutambah==true){
			echo "<div class='alert alert-danger' role='alert'><center><span class='glyphicon glyphicon-warning-sign'></span> Gagal Update!!! </center></div>";
		}
		else if(!$bantutambah2==true){
			echo "<div class='alert alert-danger' role='alert'><center><span class='glyphicon glyphicon-warning-sign'></span> Gagal Update!!! </center></div>";
		}
		else if(!$hkalibrasi==true){
			echo "<div class='alert alert-danger' role='alert'><center><span class='glyphicon glyphicon-warning-sign'></span> Gagal Update!!! </center></div>";
		}
		
		}
		

		

	

?>
<?php

$noderr=$_GET['no'];
?>

<div class="col-md-12" style="background-color:#EEEEEF;opacity:0.9; padding-bottom:10px; padding-top:10px;">
<center>
	<a style="margin-bottom:10px;margin-left:2px; background-color:skyblue; border-color:skyblue" href="edittermometer1.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Termometer 1</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:Green; border-color:Green" href="edittermometer2.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Termometer 2</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:#E95A6F; border-color:#E95A6F" href="edittermometer3.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Termometer 3</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:#203A49; border-color:#203A49" href="edittermometer4.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Termometer 4</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:#DAB96B; border-color:#DAB96B" href="edittermometer5.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Termometer 5</a>
	<a style="margin-bottom:10px;margin-left:2px; background-color:#008FD7; border-color:#008FD7" href="edittermometer6.php?no=<?php echo $noderr;?>" class="btn btn-primary" ><span></span>Termometer 6</a>
<h3>Edit Pengamatan Termometer 1</h3>
</center>
<?php


$det=mysqli_query($koneksi,"select * from itermometer1 where noorder='$noderr'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
?>

<form action="" method="POST" class="form-horizontal">

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
			<label class="col-sm-3 control-label">Set Point</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" readonly name="point"  value="<?php echo $d['setpoin']; ?>" />
			</div>
			</div>
		</div>
	</div>
	
	<table class="col-md-12" style="border-color:skyblue;" >
		<tr>
			<td style="background-color:skyblue;"><center></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label">S1</label></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label">T1</label></center></td>
			<td style="background-color:skyblue;"> <center><label class="control-label">T2</label></center></td>
			<td style="background-color:skyblue;"><center><label class="control-label">S2</label></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;" class="col-md-3"><center><label class="control-label">1</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="s1" value="<?php echo $d['s11']; ?>" required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="t1" value="<?php echo $d['t1']; ?>" required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="t21" value="0.0" required  /></center></td>
			<td rowspan="2"><center><input type="text" class="form-control" style="border-radius:0px; padding:33px 0;" value="<?php echo $d['s21']; ?>" name="s21" required  /></center></td>
		</tr>
			
		<tr>
			<td style="background-color:skyblue;" class="col-md-3"><center><label class="control-label">2</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="s2" value="<?php echo $d['s12']; ?>" required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="t2" value="<?php echo $d['t2']; ?>" required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="t22" value="0.0"  required /></center></td>
			
		</tr>
		
		<tr>
			<td style="background-color:skyblue;" class="col-md-3"><center><label class="control-label">3</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="s3" value="<?php echo $d['s13']; ?>" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="t3" value="<?php echo $d['t3']; ?>" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="t23" value="0.0"  required /></center></td>
			<td rowspan="2"><center><input type="text" class="form-control" style="border-radius:0px; padding:33px 0;" name="s22" value="<?php echo $d['s22']; ?>"  required /></center></td>
		</tr>
			
		<tr>
			<td style="background-color:skyblue;" class="col-md-3"><center><label class="control-label">4</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="s4" value="<?php echo $d['s14']; ?>" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="t4" value="<?php echo $d['t4']; ?>" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="t24" value="0.0"  required /></center></td>
			
		</tr>
		
		<tr>
			<td style="background-color:skyblue;" class="col-md-3"><center><label class="control-label">5</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="s5" value="<?php echo $d['s15']; ?>" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="t5" value="<?php echo $d['t5']; ?>" required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="t25" value="0.0" required  /></center></td>
			<td rowspan="2"><center><input type="text" class="form-control" style="border-radius:0px; padding:33px 0;" name="s23" value="<?php echo $d['s23']; ?>" required  /></center></td>
		</tr>
			
		<tr>
			<td style="background-color:skyblue;" class="col-md-3"><center><label class="control-label">6</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="s6" value="<?php echo $d['s16']; ?>"  required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="t6" value="<?php echo $d['t6']; ?>" required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="t26" value="0.0"  required /></center></td>
			
		</tr>
		<tr>
			<td style="background-color:skyblue;" class="col-md-3" ><center><label class="control-label">Koreksi Titik Nol</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="ktnt1" value="<?php echo $d['ktnt1']; ?>" required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"  required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"  required /></center></td>
		</tr>
		<tr>
			<td style="background-color:skyblue;" class="col-md-3" ><center><label class="control-label">Koreksi Standar</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="ksts1" value="<?php echo $d['ksts1']; ?>"  required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"  required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"  required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="ksts2" value="<?php echo $d['ksts2']; ?>" required /></center></td>
		</tr>
		<tr>
			<td style="background-color:skyblue;" class="col-md-3" ><center><label class="control-label">Nilai Skala Terkecil</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"  required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" name="nstt1" value="<?php echo $d['nstt1']; ?>" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"  required /></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;" class="col-md-3" ><center><label class="control-label">Pembagi Nilai Skala Terkecil</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" value="<?php echo number_format($d['pembt1'],2); ?>" name="pembt1" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;" class="col-md-3" ><center><label class="control-label">Ketidakpastian Standar</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" value="<?php echo number_format($d['ktksts1'],3); ?>" name="ktksts1" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" value="<?php echo number_format($d['ktksts2'],3); ?>" name="ktksts2" required  /></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;" class="col-md-3" ><center><label class="control-label">Pembagi</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" value="<?php echo number_format($d['pembs1'],2); ?>" name="pembs1"  required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;" class="col-md-3" ><center><label class="control-label">Ketidakpastian Media</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" value="<?php echo number_format($d['ktkms1'],3); ?>" name="ktkms1" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
		</tr>
		<tr>
			<td style="background-color:skyblue;" class="col-md-3" ><center><label class="control-label">Pembagi Ketidakpastian Media</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" value="<?php echo number_format($d['pembs12'],2); ?>" name="pembs12" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"  required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"  required /></center></td>
		</tr>
		<tr>
			<td style="background-color:skyblue;" class="col-md-3" ><center><label class="control-label">Ketidakpastian titik ES</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" value="<?php echo number_format($d['ktktes1'],3); ?>" name="ktktes1"   /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"   /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"   /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"   /></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;" class="col-md-3" ><center><label class="control-label">Pembagi Titik ES</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"  required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" value="<?php echo number_format($d['iat1'],2); ?>" name="iat1"  required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"  required /></center></td>
		</tr>
		
		<tr>
			<td style="background-color:skyblue;" class="col-md-3" ><center><label class="control-label">Faktor Cakupan</label></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik"  required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" value="<?php echo number_format($d['fct1'],3); ?>" name="fct1"  required /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
			<td><center><input type="text" class="form-control" style="border-radius:0px;" readonly name="pemilik" required  /></center></td>
		</tr>
		<tr>
			<td style="background-color:skyblue;" class="col-md-3" colspan="5"><center><label class="control-label"></label></center></td>
		</tr>
		
	</table>
		
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
}
?>
<div class="col-md-12" >


<?php
include 'footer.php';
		
?>