<?PHP
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
include './config/db.php';
include_once './config/variables.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo SITE_TITLE;?></title>
        <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" >
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
       
    </head>
    <body>
		
		
        <div class="container">
			
                                    <?php if(isset($_REQUEST['message'])){?>
                                    <div class="alert alert-danger">
                                    <br>
                                        <?php echo $_REQUEST['message'];?>
                                    </div>
                                    <?php } ?>
					
                          
                                    <form method="post" action="scripts/forgotpassword.php" class="form-horizontal" id="form1">     
                                    <fieldset>

                                      <!-- Form Name -->
                                      <legend>
                                      <center>
                                        
                                      </center>
                                      </legend>
                                      <br>
                                      <div class="content center-block">Forgot Password? - No Problem Get New Password From System. </div>
                                      <br><br>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="Email">Enter Your Email</label>
                                        <div class="col-md-3">
                                          <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                            <input id="emailaddress_forgot" name="emailaddress_forgot" type="text" placeholder="Enter Your Email" class="form-control input-md">
                                          </div>
                                        </div>
                                      </div>

                                      <!-- Password input-->
                                      

                                      <!-- Password input-->


                                      <!-- Button -->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="Submit"></label>
                                        <div class="col-md-4">
                                            <button id="Submit" class="btn btn-default" type="Submit">Send Me New Password </button>
                                            
                                        </div>
                                        <div class="col-md-5">
                                            
                                        </div>
                                      </div>
                                      <br><br><br>
                                      
                                    </fieldset>
                                  </form>    
                                  
                              
				
			
		</div>
		
    </body>
</html>
