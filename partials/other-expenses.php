 <!--
<style>
    .row{ margin-top: 5px;}
</style>
<div class="modal fade" id="goldModal" role="dialog" style=" margin: 0 0 0 5px;">
    <div class="modal-dialog" style="width: 90%;height: 90%;display: inline-block;vertical-align: middle;">
              Modal content
              <div class="modal-content" style="height: 90%;min-height: 90%;height: auto;border-radius: 0;">
                  <div class="modal-header" >
                      <button type="button" class="close" data-dismiss="modal"><span class=" glyphicon glyphicon-remove"></span></button>
                      <h4 class="modal-title"> Form <span id="programme_applied"></span></h4>
                </div>
 -->
                <form id="OtherExpForm" method="POST" action="ajax/update_other_exp.php"   class="form-horizontal">
                  <div style="width:95%;">
                     
                      <div class="row">
                          <style>
                                .alert{
                                    display:none;
                                  }
                            </style>
                            
                      </div>
                      <div class="row">
                          <div class=" col-md-12">
                              <div class="row center-block">
                                  <center><h4>Other Expenses</h4></center>
                              </div>
                              <?php
                                $diamonds_sql="SELECT * FROM other_expenses where "
                                . " `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                               if($spot_prices_resultset->num_rows == 0){
                                   $i=10;
                                    while($i>0){
                                        $insert_program_critria_query = " INSERT INTO `other_expenses` "
                                                    . "(`id`, "
                                                    . "`date`,"
                                                    . "`enter_by`"
                                                    . ") VALUES ("
                                                    . " NULL, " // id
                                                    . " '".date("Y-m-d")."', "
                                                    . "  "
                                                    . " '".$_SESSION["admin_id"]."' "
                                                    . ");";
                                        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
                                        $i--;
                                    }
                               }
                               $diamonds_sql="SELECT * FROM other_expenses where "
                                . " `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                                ?>
                              <table class = "table table-bordered">
                               <thead>
                                   <tr>
                                      <th class=" col-md-10">description</th>
                                      <th class=" col-md-2">Amount</th>
                                      
                                   </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        if($spot_prices_resultset->num_rows > 0){
                                        while($row = $spot_prices_resultset->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td><input id="grams" name="oth_exp_desc[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['description'];?>" class="form-control"></td>
                                                <td><input id="grams" name="oth_exp_amt[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['amount'];?>" class="form-control"></td>
                                                
                                            </tr>
                                        <?php 
                                        
                                            }
                                        } 
                                        ?>
                                   

                                   
                                </tbody>

                             </table>
                          </div>
                          
                         
                      </div>
                      
                       
                      <div class="row">
                          <div class="alert  alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <span id="display_message"></span>
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
                <!--
              </div>

            </div>
        </div>
   -->