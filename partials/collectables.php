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
                <form id="CollectibleForm" method="POST" action="ajax/update_collectables.php"   class="form-horizontal">
                  <div style="width:95%;">
                     
                      <div class="row">
                          <style>
                                .alert{
                                    display:none;
                                  }
                            </style>
                            
                      </div>
                      <div class="row">
                          <div class=" col-md-6">
                              <div class="row center-block">
                                  <center><h4>Diamonds Totals</h4></center>
                              </div>
                              <?php
                                $diamonds_sql="SELECT * FROM collectables where "
                                . "  type = 'Diamonds' "
                                . " and `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                               if($spot_prices_resultset->num_rows == 0){
                                   $i=5;
                                    while($i>0){
                                        $insert_program_critria_query = " INSERT INTO `collectables` "
                                                    . "(`id`, "
                                                    . "`type`, "
                                                    . "`color`, "
                                                    . "`clarity`, "
                                                    . "`appoximate_value`,"
                                                    . "`paid`,"
                                                    . "`date`,"
                                                    . "`enter_by`"
                                                    . ") VALUES ("
                                                    . " NULL, " // id
                                                    . " 'Diamonds', "
                                                    . " '', "
                                                    . " '', "
                                                    . " '', "
                                                    . " '', "
                                                    . " '".date("Y-m-d")."', "
                                                    . "  "
                                                    . " '".$_SESSION["admin_id"]."' "
                                                    . ");";
                                        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
                                        $i--;
                                    }
                               }
                               $diamonds_sql="SELECT * FROM collectables where "
                                . "  type = 'Diamonds' "
                                . " and `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                                ?>
                              <table class = "table table-bordered">
                               <thead>
                                   <tr>
                                      <th class=" col-md-3">Colour</th>
                                      <th class=" col-md-3">Clarity</th>
                                      <th class=" col-md-3" >Approximate value</th>
                                      <th class=" col-md-3" >Paid</th>
                                   </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        if($spot_prices_resultset->num_rows > 0){
                                        while($row = $spot_prices_resultset->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td><input id="grams" name="Colour[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['color'];?>" class="form-control"></td>
                                                <td><input id="grams" name="Clarity[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['clarity'];?>" class="form-control"></td>
                                                <td><input id="grams" name="Approximatevalue[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['appoximate_value'];?>" class="form-control"></td>
                                                <td><input id="grams" name="Paid[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['paid'];?>" class="form-control"></td>
                                            </tr>
                                        <?php 
                                        
                                            }
                                        } 
                                        ?>
                                   

                                   
                                </tbody>

                             </table>
                          </div>
                          <div class=" col-md-6">
                              <div class="row center-block">
                                  <center><h4>Watches Totals</h4></center>
                              </div>
                              <?php
                                $diamonds_sql="SELECT * FROM collectables where "
                                . "  type = 'Watches' "
                                . " and `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                               if($spot_prices_resultset->num_rows == 0){
                                   $i=5;
                                    while($i>0){
                                        $insert_program_critria_query = " INSERT INTO `collectables` "
                                                    . "(`id`, "
                                                    . "`type`, "
                                                    . "`color`, "
                                                    . "`clarity`, "
                                                    . "`appoximate_value`,"
                                                    . "`paid`,"
                                                    . "`date`,"
                                                    . "`enter_by`"
                                                    . ") VALUES ("
                                                    . " NULL, " // id
                                                    . " 'Watches', "
                                                    . " '', "
                                                    . " '', "
                                                    . " '', "
                                                    . " '', "
                                                    . " '".date("Y-m-d")."', "
                                                    . "  "
                                                    . " '".$_SESSION["admin_id"]."' "
                                                    . ");";
                                        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
                                        $i--;
                                    }
                               }
                               $diamonds_sql="SELECT * FROM collectables where "
                                . "  type = 'Watches' "
                                . " and `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                                ?>
                              <table class = "table table-bordered">
                               <thead>
                                   <tr>
                                      <th class=" col-md-3">Brand</th>
                                      <th class=" col-md-3" >Approximate value</th>
                                      <th class=" col-md-3" >Paid</th>
                                     
                                   </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        if($spot_prices_resultset->num_rows > 0){
                                        while($row = $spot_prices_resultset->fetch_assoc()){
                                            ?>
                                             <tr>
                                                <td><input id="grams" name="brand[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['brand'];?>" class="form-control"></td>
                                                <td><input id="grams" name="Approximatevalue[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['appoximate_value'];?>" class="form-control"></td>
                                                <td><input id="grams" name="Paid[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['paid'];?>" class="form-control"></td>
                                            </tr>
                                        <?php }
                                        }
                                        ?>
                                   

                                   
                                </tbody>

                             </table>
                          </div>
                         
                      </div>
                      <div class="row">
                          <div class=" col-md-6">
                              <div class="row center-block">
                                  <center><h4>Collectible Coins / Bank note</h4></center>
                              </div>
                              <?php
                                $diamonds_sql="SELECT * FROM collectables where "
                                . "  type = 'Coins' "
                                . " and `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                               if($spot_prices_resultset->num_rows == 0){
                                   $i=5;
                                    while($i>0){
                                        $insert_program_critria_query = " INSERT INTO `collectables` "
                                                    . "(`id`, "
                                                    . "`type`, "
                                                    . "`color`, "
                                                    . "`clarity`, "
                                                    . "`appoximate_value`,"
                                                    . "`paid`,"
                                                    . "`date`,"
                                                    . "`enter_by`"
                                                    . ") VALUES ("
                                                    . " NULL, " // id
                                                    . " 'Coins', "
                                                    . " '', "
                                                    . " '', "
                                                    . " '', "
                                                    . " '', "
                                                    . " '".date("Y-m-d")."', "
                                                    . "  "
                                                    . " '".$_SESSION["admin_id"]."' "
                                                    . ");";
                                        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
                                        $i--;
                                    }
                               }
                               $diamonds_sql="SELECT * FROM collectables where "
                                . "  type = 'Coins' "
                                . " and `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                                ?>
                              <table class = "table table-bordered">
                               <thead>
                                   <tr>
                                      <th class=" col-md-3">Type</th>
                                      <th class=" col-md-3">Year</th>
                                      <th class=" col-md-3" >Approximate value</th>
                                      <th class=" col-md-3" >Paid</th>
                                   </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        if($spot_prices_resultset->num_rows > 0){
                                        while($row = $spot_prices_resultset->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td><input id="grams" name="coin_bank_type[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['coin_bank_type'];?>" class="form-control"></td>
                                                <td><input id="grams" name="year[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['year'];?>" class="form-control"></td>
                                                <td><input id="grams" name="Approximatevalue[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['appoximate_value'];?>" class="form-control"></td>
                                                <td><input id="grams" name="Paid[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['paid'];?>" class="form-control"></td>
                                            </tr>
                                        <?php 
                                        
                                            }
                                        } 
                                        ?>
                                   

                                   
                                </tbody>

                             </table>
                          </div>
                          <div class=" col-md-6">
                              <div class="row center-block">
                                  <center><h4>Jewellery</h4></center>
                              </div>
                              <?php
                                $diamonds_sql="SELECT * FROM collectables where "
                                . "  type = 'Jewellery' "
                                . " and `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                               if($spot_prices_resultset->num_rows == 0){
                                   $i=5;
                                    while($i>0){
                                        $insert_program_critria_query = " INSERT INTO `collectables` "
                                                    . "(`id`, "
                                                    . "`type`, "
                                                    . "`color`, "
                                                    . "`clarity`, "
                                                    . "`appoximate_value`,"
                                                    . "`paid`,"
                                                    . "`date`,"
                                                    . "`enter_by`"
                                                    . ") VALUES ("
                                                    . " NULL, " // id
                                                    . " 'Jewellery', "
                                                    . " '', "
                                                    . " '', "
                                                    . " '', "
                                                    . " '', "
                                                    . " '".date("Y-m-d")."', "
                                                    . "  "
                                                    . " '".$_SESSION["admin_id"]."' "
                                                    . ");";
                                        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
                                        $i--;
                                    }
                               }
                               $diamonds_sql="SELECT * FROM collectables where "
                                . "  type = 'Jewellery' "
                                . " and `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                                ?>
                              <table class = "table table-bordered">
                               <thead>
                                   <tr>
                                      <th class=" col-md-3">Description</th>
                                      <th class=" col-md-3" >Approximate value</th>
                                      <th class=" col-md-3" >Paid</th>
                                     
                                   </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        if($spot_prices_resultset->num_rows > 0){
                                        while($row = $spot_prices_resultset->fetch_assoc()){
                                            ?>
                                             <tr>
                                                <td><input id="grams" name="description[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['description'];?>" class="form-control"></td>
                                                <td><input id="grams" name="Approximatevalue[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['appoximate_value'];?>" class="form-control"></td>
                                                <td><input id="grams" name="Paid[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['paid'];?>" class="form-control"></td>
                                            </tr>
                                        <?php }
                                        }
                                        ?>
                                   

                                   
                                </tbody>

                             </table>
                          </div>
                         
                      </div>
                       <div class="row">
                          <div class=" col-md-6">
                              <div class="row center-block">
                                  <center><h4>Invoices</h4></center>
                              </div>
                              <?php
                                $diamonds_sql="SELECT * FROM invoices where "
                                . " `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                               if($spot_prices_resultset->num_rows == 0){
                                   $i=20;
                                    while($i>0){
                                        $insert_program_critria_query = " INSERT INTO `invoices` "
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
                               $diamonds_sql="SELECT * FROM invoices where "
                                . " `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                                ?>
                              <table class = "table table-bordered">
                               <thead>
                                   <tr>
                                      <th class=" col-md-3">Paid</th>
                                      <th class=" col-md-3">By</th>
                                      <th class=" col-md-3" >Cheque #</th>
                                      
                                   </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        if($spot_prices_resultset->num_rows > 0){
                                        while($row = $spot_prices_resultset->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td><input id="grams" name="paid_invoice[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['paid'];?>" class="form-control"></td>
                                                <td><input id="grams" name="paid_by[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['paid_by'];?>" class="form-control"></td>
                                                <td><input id="grams" name="cheque_no[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['cheque_no'];?>" class="form-control"></td>
                                                
                                            </tr>
                                        <?php 
                                        
                                            }
                                        } 
                                        ?>
                                   

                                   
                                </tbody>

                             </table>
                          </div>
                          <div class=" col-md-6">
                              <div class="row center-block">
                                  <center><h4>Expenses</h4></center>
                              </div>
                              <?php
                                $diamonds_sql="SELECT * FROM expenses where "
                                . " `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                               if($spot_prices_resultset->num_rows == 0){
                                   $i=20;
                                    while($i>0){
                                        $insert_program_critria_query = " INSERT INTO `expenses` "
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
                               $diamonds_sql="SELECT * FROM expenses where "
                                . " `date` = date('".date("Y-m-d")."')"
                                . " and enter_by = '".$_SESSION["admin_id"]."';";
                               $spot_prices_resultset = $conn->query($diamonds_sql);
                                ?>
                              <table class = "table table-bordered">
                               <thead>
                                   <tr>
                                      <th class=" col-md-6">Description</th>
                                      <th class=" col-md-4" >Amount</th>
                                      
                                     
                                   </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        if($spot_prices_resultset->num_rows > 0){
                                        while($row = $spot_prices_resultset->fetch_assoc()){
                                            ?>
                                             <tr>
                                                <td><input id="grams" name="exp_description[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['description'];?>" class="form-control"></td>
                                                <td><input id="grams" name="exp_amount[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['amount'];?>" class="form-control"></td>
                                                
                                            </tr>
                                        <?php }
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