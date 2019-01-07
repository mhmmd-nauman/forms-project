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
                <form id="SpotPricesForm" method="POST" action="ajax/update_spot_prices.php"   class="form-horizontal">
                  <div style="width:95%;">
                      <input type="hidden" name="active_session_id" id="active_session_id" value="1">
                      <div class="row">
                          <style>
                                .alert{
                                    display:none;
                                  }
                            </style>
                            
                      </div>
                      <div class="row">
                          <div class=" col-md-4">
                              <?php
                                $spot_prices_sql="SELECT * FROM spotprices where `type` = 'Gold'"
                                        . "  ";
                                $spot_prices_resultset = $conn->query($spot_prices_sql);
                                ?>
                              <table class = "table table-bordered">
                               <thead>
                                   <tr>
                                      <th class=" col-md-6">Gold</th>
                                      <th class=" col-md-6" >Grams</th>
                                     
                                   </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        if($spot_prices_resultset->num_rows > 0){
                                        while($row = $spot_prices_resultset->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['item']?></td>
                                                <td><input id="grams" name="grams[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['price_per_gram'];?>" class="form-control"></td>

                                            </tr>
                                        <?php }
                                        }
                                        ?>
                                   

                                   
                                </tbody>

                             </table>
                          </div>
                          <div class=" col-md-4">
                              <?php
                                $spot_prices_sql="SELECT * FROM spotprices where `type` = 'Platinum'"
                                        . "  ";
                                $spot_prices_resultset = $conn->query($spot_prices_sql);
                                ?>
                              <table class = "table table-bordered">
                               <thead>
                                   <tr>
                                      <th class=" col-md-6" >Platinum</th>
                                      <th class=" col-md-6" >Grams</th>
                                     
                                   </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        if($spot_prices_resultset->num_rows > 0){
                                        while($row = $spot_prices_resultset->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['item']?></td>
                                                <td><input id="grams" name="grams[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['price_per_gram'];?>" class="form-control"></td>

                                            </tr>
                                        <?php }
                                        }
                                        ?>
                                   

                                   
                                </tbody>

                             </table>
                          </div>
                          <div class=" col-md-4">
                              <?php
                                $spot_prices_sql="SELECT * FROM spotprices where `type` = 'Silver'"
                                        . "  ";
                                $spot_prices_resultset = $conn->query($spot_prices_sql);
                                ?>
                              <table class = "table table-bordered">
                               <thead>
                                   <tr>
                                      <th class=" col-md-6" >Silver</th>
                                      <th class=" col-md-6" >Grams</th>
                                     
                                   </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        if($spot_prices_resultset->num_rows > 0){
                                        while($row = $spot_prices_resultset->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['item']?></td>
                                                <td><input id="grams" name="grams[<?php echo $row['id'];?>]" type="text" value="<?php echo $row['price_per_gram'];?>" class="form-control"></td>

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
                                    <button id="saveCriteria" name="saveCriteria" type = "submit" class = "btn btn-default">Save Spot Prices</button>
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