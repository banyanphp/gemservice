

<?php $zone=$_REQUEST['id'];


include ("db/db_connect.php");
 $query="SELECT * FROM tbl_products_model WHERE product_name ='$zone'";
$result=mysql_query($query);

?>
<select name="model" class="form-control" id="city" onChange="getcategory('<?php echo $zone;?>',this.value)">
<option value="0">Select Model</option>
<?php while($row=mysql_fetch_array($result)) { 
?>
<option value="<?php echo $row['model_name'];?>"><?php echo $row['model_name']?></option>
<?php } ?>
</select>
