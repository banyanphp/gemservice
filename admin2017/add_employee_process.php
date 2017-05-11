<?php
		
include ("db/db_connect.php");
error_reporting('0');		$date_pic = time();
		$newdate1 = date('Y-m-d', $date_pic);
		$newdate = date('jS M Y', strtotime($newdate1));
		$emp_name = $_POST['ename'];
		$gender = $_POST['gender'];
		$emp_code = $_POST['ecode'];
		$password = $_POST['password'];
		$epassword = md5($password);
		$emp_dept = $_POST['edept'];
		$emp_cell = $_POST['ecell'];
		$emp_mail = $_POST['e_mail'];
		
if($_POST['user'] == 'yes')
{ $cont_user = 'yes'; } else { $cont_user = 'no'; }

if($_POST['cms'] == 'yes')
{ $cont_cms = 'yes'; } else { $cont_cms = 'no'; }

if($_POST['news'] == 'yes')
{ $cont_news = 'yes'; } else { $cont_news = 'no'; }

if($_POST['employee'] == 'yes')
{ $cont_employee = 'yes'; } else { $cont_employee = 'no'; }

if($_POST['import'] == 'yes')
{ $cont_import = 'yes'; } else { $cont_import = 'no'; }

if($_POST['complaint'] == 'yes')
{ $cont_comp = 'yes'; } else { $cont_comp = 'no'; }

if($_POST['service'] == 'yes')
{ $cont_service = 'yes'; } else { $cont_service = 'no'; }

if($_POST['pending'] == 'yes')
{ $cont_pending = 'yes'; } else { $cont_pending = 'no'; }
		
if($_POST['reports'] == 'yes')
{ $cont_reports = 'yes'; } else { $cont_reports = 'no'; }
		

		$st_ex = mysql_query("select * from employee where emp_code = '$emp_code'");
		$st_result = mysql_num_rows($st_ex);

		if($st_result == '')
		{
		mysql_query("insert into employee (id, emp_name, gender, emp_code, password, dept, contact, email, users, cms, news, service, employee, import, complaint, date,pending,reports) values ('', '$emp_name', '$gender', '$emp_code', '$epassword', '$emp_dept', '$emp_cell', '$emp_mail', '$cont_user', '$cont_cms', '$cont_news', '$cont_service', '$cont_employee', '$cont_import', '$cont_comp', '$newdate','$cont_pending','$cont_reports')");
		echo "1";
		} else {
		echo "2";
		}
		
		  ?>