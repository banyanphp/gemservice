
<?php 
$zone=$_REQUEST['id'];
$countryId=$_REQUEST['countryId'];


include ("db/db_connect.php");
  $query="SELECT * FROM tbl_service_category WHERE products_name ='$countryId' and model='$zone'";
$result=mysql_query($query);

?>
<select name="comp_cate" class="form-control" id="category" onchange="getservice(this.value,'<?php echo $zone; ?>','<?php echo $countryId; ?>')" >
<option value="0">Select Service Category</option>
<?php while($row=mysql_fetch_array($result)) { 
?>
<option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name']?></option>
<?php } ?>
</select>
