

<?php 
$zone=$_REQUEST['id'];
$countryId=$_REQUEST['countryId'];


include ("db/db_connect.php");
  $query="SELECT * FROM tbl_complaint_type WHERE products_name ='$countryId' and model='$zone'";
$result=mysql_query($query);

?>
<select name="city" class="form-control" id="complaint">
<option value="0">Select complaint Type</option>
<?php while($row=mysql_fetch_array($result)) { 
?>
<option value="<?php echo $row['complaint_name'];?>"><?php echo $row['complaint_name']?></option>
<?php } ?>
</select>
