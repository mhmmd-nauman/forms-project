<?php
$spot_prices_sql="SELECT * FROM spotprices where `type` = 'Gold'"
        . "  ";
$spot_prices_resultset = $conn->query($spot_prices_sql);
?>
<style>
    .row{ margin-top: 5px;}
</style>
<div class="modal fade" id="goldModal" role="dialog" style=" margin: 0 0 0 5px;">
    <div class="modal-dialog" style="width: 90%;height: 90%;display: inline-block;vertical-align: middle;">
              <!-- Modal content-->
              <div class="modal-content" style="height: 90%;min-height: 90%;height: auto;border-radius: 0;">
                  <div class="modal-header" >
                      <button type="button" class="close" data-dismiss="modal"><span class=" glyphicon glyphicon-remove"></span></button>
                      <h4 class="modal-title"> Metal Gold <span id="programme_applied"></span></h4>
                </div>
                <form id="admissionSettingForm" method="POST" action="ajax/update_gold.php"   class="form-horizontal">
                  <div style="width:95%;">
                      <input type="hidden" name="active_session_id" id="active_session_id" value="1">
                      <div class="row">
                          <style>
                                .alert{
                                    display:none;
                                  }
                            </style>
                            <div class="alert  alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <span id="display_message"></span>
                            </div>
                      </div>
                     
                          <div class="row">
                                <div class="form-group" >
                                    <label for = "firstname" class = "col-md-4 control-label">
                                        Description:
                                    </label>
                                    <div class=" col-md-8" >
                                        <select name="description" class=" form-control">
                                        <?php
                                        if($spot_prices_resultset->num_rows > 0){
                                        while($row = $spot_prices_resultset->fetch_assoc()){
                                            ?>
                                            <option value="<?php echo $row['id']?>"><?php echo $row['item']?></option>
                                        <?php }
                                        }
                                        ?>
                                        </select>
                                       </div>
                                    

                                </div>
                            </div>
                         <div class="row">
                                <div class="form-group" >
                                    
                                    <label for = "firstname" class = "col-md-4 control-label">
                                        Grams:
                                    </label>
                                    <div class=" col-md-8" >
                                        <input id="grams" name="grams" type="text" value="" class="form-control">
                                    </div>

                                </div>
                            </div>
                        
                      <div class="row">
                        <div class="col-md-4 col-md-offset-5">
                            <div class = "form-group">
                                <div ><br>
                                    <button id="saveCriteria" name="saveCriteria" type = "submit" class = "btn btn-default">Save Form</button>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                      <!-- end of tabs -->
                      </div>
                      
                   </form>
                
              </div>

            </div>
        </div>
   