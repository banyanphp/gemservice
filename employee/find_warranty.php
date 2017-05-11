<?php

 $year=date("Y");
 $month=date("m");
$year_c=$year-$_POST['year'];
$year_c_y=$year_c-1;
 $month_mul=$year_c_y*12;
$sub_month=13-$_POST['month'];
 $city=$_POST['city'];
 $total_month=$month+$month_mul+$sub_month;
 include ("db/db_connect.php");
  $query="SELECT * FROM `tbl_warranty` WHERE `type` ='$city'";
  
$result=mysql_query($query);
$row=mysql_fetch_array($result);
 $w=$row['warranty'];
 if($w>$total_month){
	 echo "yes";
 }
else{
	 echo "no";
}
?>