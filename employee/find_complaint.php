
<?php 
$zone=$_REQUEST['id'];
$countryId=$_REQUEST['countryId'];


include ("db/db_connect.php");
 $query="SELECT * FROM tbl_complaint_type WHERE products_name ='$zone' and model='$countryId'";
$result=mysql_query($query);

?>  
                                                 
  <div class="form-group">
                                                    <label class="col-md-4 control-label">Select Complaint Type</label>
                                                    <div class="col-md-8">
<select name="comp_type" class="form-control" id="complaint">
<option value="0">Select complaint Type</option>
<?php while($row=mysql_fetch_array($result)) { 
?>
<option value="<?php echo $row['complaint_name'];?>"><?php echo $row['complaint_name']?></option>
<?php } ?>
</select>
</div>
</div>

