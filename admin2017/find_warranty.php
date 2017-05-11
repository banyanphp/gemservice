<?php
$date=$_POST['month'];
$date.='-';
$date.=$_POST['year'];
 $year=date("Y");
 $month=date("m");
$year_c=$year-$_POST['year'];
$year_c_y=$year_c-1;
 $month_mul=$year_c_y*12;
$sub_month=13-$_POST['month'];
 $total_month=$month+$month_mul+$sub_month;
 
 
 if($total_month>16){
	 echo "No";
 }
else{
	 echo "Yes";
}
?>