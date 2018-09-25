<?php
	include "config/koneksi.php";
	$sql="select bantuiter1.noorder,bantuiter1.koreksit1,bantuiter2.koreksit2,bantuiter3.koreksit3,bantuiter4.koreksit4,bantuiter5.koreksit5,bantuiter6.koreksit6
	from (((((bantuiter1
	inner join bantuiter2 on bantuiter2.noorder = bantuiter1.noorder)
	inner join bantuiter3 on bantuiter3.noorder = bantuiter1.noorder)
	inner join bantuiter4 on bantuiter4.noorder = bantuiter1.noorder)
	inner join bantuiter5 on bantuiter5.noorder = bantuiter1.noorder)
	inner join bantuiter6 on bantuiter6.noorder = bantuiter1.noorder)";
	$bakso= mysqli_query($koneksi,$sql) ;
	
	echo "<br/>";
	
	while($roww=$bakso->fetch_array()){
		echo "<br/>".$roww['noorder']." <br/>";
		echo $roww['koreksit1']."<br/> ";
		echo $roww['koreksit2']." <br/>";
		echo $roww['koreksit3']." <br/>";
		echo $roww['koreksit4']." <br/>";
		echo $roww['koreksit5']." <br/>";
		echo $roww['koreksit6']." <br/>";
	}
		
	
	
	
	
	
?>