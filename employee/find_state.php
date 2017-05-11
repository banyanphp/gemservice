

<?php $zone=intval($_REQUEST['id']);


include ("db/db_connect.php");

$query="SELECT * FROM service_place WHERE zoneid ='$zone'";
$result=mysql_query($query);

?>
<select name="city" class="form-control" id="city">
<option value="">Select Place</option>
<?php while($row=mysql_fetch_array($result)) { 
?>
<option value="<?php echo $row['id'];?>"><?php echo $row['place']?></option>
<?php } ?>
</select>
