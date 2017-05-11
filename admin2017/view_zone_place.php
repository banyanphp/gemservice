<?php
$id = $_POST['id'];


include ("db/db_connect.php");


$get_title = mysql_query("SELECT * FROM `team` where id='$id'");
$fetch_profile = mysql_fetch_array($get_title);
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
                    <form class="form-horizontal" role="form" action="update_zone_place.php" method="post">

                        <div class="form-group">
                            <label class="col-md-2 control-label">Place</label>
                            <div class="col-md-10">
                                <input name="edit_ct" class="form-control" rows="5" value="<?php echo $fetch_profile['team_name']; ?>">	                                                </div>
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