

<?php $zone=intval($_REQUEST['id']);


include ("db/db_connect.php");

$query="SELECT * FROM service_place WHERE zoneid ='$zone'";
$result=mysql_query($query);

?>
<select name="place" class="form-control" id="place" onChange="getemployee('<?php echo $zone; ?>',this.value)">
<option value="0">Select Place</option>
<?php while($row=mysql_fetch_array($result)) { 
?>
<option value="<?php echo $row['id'];?>"><?php echo $row['place']?></option>
<?php } ?>
</select>
