<?php
$row = $_SESSION['admission_setting'];
?>
<style>
    .row{ margin-top: 5px;}
</style>
<div class="modal fade" id="settingModal" role="dialog" style=" margin: 0 0 0 5px;">
    <div class="modal-dialog" style="width: 90%;height: 90%;display: inline-block;vertical-align: middle;">
              <!-- Modal content-->
              <div class="modal-content" style="height: 90%;min-height: 90%;height: auto;border-radius: 0;">
                  <div class="modal-header" >
                      <button type="button" class="close" data-dismiss="modal"><span class=" glyphicon glyphicon-remove"></span></button>
                      <h4 class="modal-title"> Merit List Date Settings Manager <span id="programme_applied"></span></h4>
                </div>
                <form id="admissionSettingForm" method="POST" action="ajax/update_admission_settings.php"   class="form-horizontal">
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
                     
                      
                           
                        <div class="row" >

                            <div class = "form-group">
                                <label for = "firstname" class = "col-md-3 control-label">
                                     Select Session:
                                </label>
                                <div class = "col-md-2 ">
                                    <label class="radio-inline"><input type="radio" name="session_type" value="Spring" <?php if($row['session_type'] == 'Spring')echo "checked";?>>Spring</label>
                                    <label class="radio-inline"><input type="radio" name="session_type" value="Fall" <?php if($row['session_type'] == 'Fall')echo "checked";?>>Fall</label>

                                </div>
                                <label for = "firstname" class = "col-md-3 control-label">
                                     Year:
                                </label>
                                <div class = "col-md-2 ">
                                    <select name="session_year" id="session_year" class="form-control" >

                                        <option value="2019" <?php if($row['session_year'] == '2019')echo "selected";?>>2019</option>
                                    </select>
                                </div>
                                <div class="col-md-3 pull-right ">

                                </div>
                            </div>

                            </div>
                          <div class="row">
                                <div class="form-group" >
                                    <label for = "firstname" class = "col-md-3 control-label">
                                        Advertisement Date:
                                    </label>
                                    <div class=" col-md-2" >
                                       <input id="advertisement_date" name="advertisement_date" type="text" value="<?php echo $row['advertisement_date'];?>" class="form-control">
                                    </div>
                                    <label for = "firstname" class = "col-md-3 control-label">
                                        Commencement of Classes:
                                    </label>
                                    <div class=" col-md-2" >
                                        <input id="commencement_of_classes" name="commencement_of_classes" type="text" value="<?php echo $row['commencement_of_classes'];?>" class="form-control">
                                    </div>

                                </div>
                            </div>
                          <div class="row">
                              <div class="form-group" >
                                    <label for = "firstname" class = "col-md-3 control-label">
                                         Start Date - Application Submission:
                                    </label>
                                    <div class=" col-md-2" >
                                        <input type="text" id="application_submission_start_date" name="application_submission_start_date" value="<?php echo $row['application_submission_start_date'];?>" class="form-control">
                                    </div>
                                    <label for = "firstname" class = "col-md-3 control-label">
                                        Last Date - Application Submission:
                                    </label>
                                    <div class=" col-md-2" >
                                        <input type="text" id="application_submission_end_date" name="application_submission_end_date" value="<?php echo $row['application_submission_end_date'];?>" class="form-control">
                                    </div>
                                </div>
                          </div>
                        <div class="row">
                            <div class="form-group" >
                                <label for = "firstname" class = "col-md-3 control-label">
                                    First Merit List Start Display:
                                </label>
                                <div class=" col-md-2" >
                                    <input type="text" id="first_list_start_display_date" name="first_list_start_display_date" value="<?php echo $row['first_list_start_display_date'];?>" class="form-control">
                                </div>
                                <label for = "firstname" class = "col-md-3 control-label">
                                    Last Date Dues Submission:
                                </label>
                                <div class=" col-md-2" >
                                    <input type="text" id="first_list_end_display_date" name="first_list_end_display_date" value="<?php echo $row['first_list_end_display_date'];?>" class="form-control">
                                </div>
                            </div>
                        </div>
                       <div class="row">
                            <div class="form-group" >
                                <label for = "firstname" class = "col-md-3 control-label">
                                    Second Merit List Start Display:
                                </label>
                                <div class=" col-md-2" >
                                    <input id="second_list_start_display_date" name="second_list_start_display_date" type="text" value="<?php echo $row['second_list_start_display_date'];?>" class="form-control">
                                </div>
                                <label for = "firstname" class = "col-md-3 control-label">
                                    Last Date Dues Submission:
                                </label>
                                <div class=" col-md-2" >
                                    <input id="second_list_end_display_date" name="second_list_end_display_date" type="text" value="<?php echo $row['second_list_end_display_date'];?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group" >
                                <label for = "firstname" class = "col-md-3 control-label">
                                    Third Merit List Start Display:
                                </label>
                                <div class=" col-md-2" >
                                    <input id="third_list_start_display_date" name="third_list_start_display_date" type="text" value="<?php echo $row['third_list_start_display_date'];?>" class="form-control">
                                </div>
                                <label for = "firstname" class = "col-md-3 control-label">
                                    Last Date Dues Submission:
                                </label>
                                <div class=" col-md-2" >
                                    <input id="third_list_end_display_date" name="third_list_end_display_date" type="text" value="<?php echo $row['third_list_end_display_date'];?>" class="form-control">
                                </div>
                            </div>
                        </div>
                      
                      <div class="row">
                        <div class="col-md-4 col-md-offset-5">
                            <div class = "form-group">
                                <div ><br>
                                    <button id="saveCriteria" name="saveCriteria" type = "submit" class = "btn btn-default">Save Admission Settings</button>
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
   