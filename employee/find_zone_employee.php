

<?php $zone=intval($_REQUEST['id']);
$place=intval($_REQUEST['placeid']);

include ("db/db_connect.php");

 $query="SELECT * FROM service_engineers WHERE zoneid ='$zone' and 	placeid='$place'";
$result=mysql_query($query);

?>
<select name="employee" class="form-control" id="employee">
<option value="0">Select Engineers</option>
<?php while($row=mysql_fetch_array($result)) { 
?>
<option value="<?php echo $row['eng_code'];?>"><?php echo $row['engineers']?></option>
<?php } ?>
</select>
