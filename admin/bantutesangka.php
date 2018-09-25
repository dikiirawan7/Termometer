<?php
		$s1=0;
		echo $s1."<br/>";
		$s2=0;
		echo $s2."<br/>";
		$s3=0;
		echo $s3."<br/>";
		$s4=0;
		echo $s4."<br/>";
		$s5=0;
		echo $s5."<br/>";
		$s6=0;
		echo $s6."<br/>";
		$t1=0;
		echo $t1."<br/>";
		$t2=0;
		echo $t2."<br/>";		
		$t3=0;
		echo $t3."<br/>";
		$t4=0;
		echo $t4."<br/>";
		$t5=0;
		echo $t5."<br/>";
		$t6=0;
		echo $t6."<br/>";
		$s21=0;
		echo $s21."<br/>";
		$s22=0;
		echo $s22."<br/>";
		$s23=0;
		echo $s23."<br/>";
		
		$ktnt1=0;
		echo $ktnt1."<br/>";
		$ksts1=0;
		echo $ksts1."<br/>";
		$ksts2=0;
		echo $ksts2."<br/>";
		$nstt1=0;
		echo $nstt1."<br/>";
		$pembt1=1;
		echo $pembt1."<br/>";
		$ktksts1=1;
		echo $ktksts1."<br/>";
		$ktksts2=1;
		echo $ktksts2."<br/>";
		$pembs1=1;
		echo $pembs1."<br/>";
		$ktkms1=1;
		echo $ktkms1."<br/>";
		$pembs12=1;
		echo $pembs12."<br/>";
		$ktktes1=1;
		echo $ktktes1."<br/>";
		$fct1=1;
		echo $fct1."<br/>";
		$iat1=1;
		echo $iat1."<br/>";
		
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
		$akarhsilt1=number_format(sqrt($hsilt1),2);
		
		$pembt1sq=5;
		
		//bantuitermometer
		$rts1=$hsilrts1;
		echo $rts1."<br/>";
		$rtt1=($t1+$t2+$t3+$t4+$t5+$t6)/6;
		echo $rtt1."<br/>";
		$rts2=$hsilrts2;
		echo $rts2."<br/>";
		$hks1=$hsilrts1+$ksts1;
		echo $hks1."<br/>";
		$hkt1=$rtt1+$ktnt1;
		echo $hkt1."<br/>";
		$hks2=$rts2+$ksts2;
		echo $hks2."<br/>";
		$kpenjt1=(($hks1+$hks2)/2)-$hkt1;
		echo $kpenjt1."<br/>";
		$stdevt1=$akarhsilt1;
		echo $stdevt1."<br/>";
		$pembt1sqrt=number_format(sqrt($pembt1sq),2);
		echo $pembt1sqrt."<br/>";
		$pembs2=$pembs1;
		echo $pembs2."<br/>";
		$ktkmt1=$ktkms1;
		echo $ktkmt1."<br/>";
		$ktkms2=$ktkms1;
		echo $ktkms2."<br/>";
		$pembt12=$pembs12;
		echo $pembt12."<br/>";
		$pembs22=$pembs12;
		echo $pembs22."<br/>";
		$ktksest1=$ktktes1;
		echo $ktksest1."<br/>";
		$ktkses2=$ktktes1;
		echo $ktkses2."<br/>";
		
		//bantu ktgbt1
		$akar3=number_format(sqrt(3),2);
		$btktgbt1=(($stdevt1/$pembt1sqrt)*($stdevt1/$pembt1sqrt))+((($nstt1/$pembt1)/$akar3)*(($nstt1/$pembt1)/$akar3))+(($ktksts1/$pembs1)*($ktksts1/$pembs1))+(($ktksts2/$pembs22)*($ktksts2/$pembs22))+(($ktkmt1/$pembt12)*($ktkmt1/$pembt12))+(($ktksest1/$iat1)*($ktksest1/$iat1));
		$akarbtktgbt1=number_format(sqrt($btktgbt1),2);
		
		$ktgbt1=$akarbtktgbt1;
		echo $ktgbt1."<br/>";
		$ktbet1=$ktgbt1*$fct1;
		echo $ktbet1."<br/>";
?>