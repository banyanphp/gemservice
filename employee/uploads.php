<?PHP
$rand=rand();
ECHO $file_name=$_FILES["report"]["name"];
	$img_name=$rand;
	$img_name.=$file_name;
	    $temp_name=$_FILES["report"]["tmp_name"];

	    $imgtype=$_FILES["report"]["type"];

?>