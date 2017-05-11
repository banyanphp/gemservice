<?php
$id = $_POST['id'];


include ("db/db_connect.php");


$get_title = mysql_query("SELECT * FROM `team` where id='$id'");
$fetch_profile = mysql_fetch_array($get_title);
$head=$fetch_profile['team_head'];
?>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Update Team</h4>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <form class="form-horizontal" role="form" action="update_team.php" method="post">

                        <div class="form-group">
                            <label class="col-md-2 control-label">Team Name</label>
                            <div class="col-md-10">
                                <input name="edit_ct" class="form-control" rows="5" value="<?php echo $fetch_profile['team_name']; ?>">	                                                </div>
                        </div>

<div class="form-group">
                                            <label class="col-md-2 control-label">Team Head</label>
                                            <div class=" col-md-10">
                                                 <select class="form-control"  name="head" id="head">
													<option value="0">Select Employee</option>
<?php $x = mysql_query("select * from employee");
														while($y = mysql_fetch_array($x))
														{
															
														?><option value="<?php echo $y['id'];?>" <?php if($y['id']==$head){
echo "selected";
 } ?>
> <?php echo $y['emp_name'];?>(<?php echo $y['emp_code'];?>)</option> 									
														<?php }
 														?>
												
												  </select>
                                               
                                            </div>
                                        </div>
                        <div class="form-group">
                            <input type="hidden" name="eid" value="<?php echo $id; ?>">
                            <div class="col-md-12">
                                <button class="btn btn-info"  style="float:right">Submit</button>
								   
                            </div>
                        </div>
                    </form>
                </div><!-- end col -->
            </div>

            <div class="modal-footer" style="border-top:none;border-bottom:1px solid #CACACA">
           
            </div>
        </div>
    </div>
</div>