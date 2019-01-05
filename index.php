<?PHP
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
include './config/db.php';
include_once './config/variables.php';
if(isset($_SESSION["admin_id"])){
    header("Location:index-choice.php");
}
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
		
		
        <div  class="container">
			
            <br><br>
			
				
				<div id="contents">
                                    <?php if(isset($_REQUEST['status'])){?>
                                    <div class="alert alert-danger">
                                    <br>
                                        <?php echo $_REQUEST['msg'];?>
                                    </div>
                                    <?php } ?>
					
                          
                                    <form method="post" action="login.php" class="form-horizontal" id="form1"> 
                                    <fieldset>

                                      <!-- Form Name -->
                                      <legend>
                                      <center>
                                       
						Form Login 
                                           
                                      </center>
                                      </legend>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="Email">Email</label>
                                        <div class="col-md-3">
                                          <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                            <input id="emailaddress_login" name="emailaddress_login" type="text" placeholder="Enter Your Email" class="form-control input-md">
                                          </div>
                                        </div>
                                      </div>

                                      <!-- Password input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="Password">Password</label>
                                        <div class="col-md-3">
                                          <div class="input-group"> <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                            <input id="password_login" name="password_login" type="password" placeholder="Enter Your Password" class="form-control input-md">
                                          </div>
                                        </div>
                                      </div>

                                      <!-- Password input-->


                                      <!-- Button -->
                                      <div class="form-group">
                                        <label class="col-md-5 control-label" for="Submit"></label>
                                        <div class="col-md-1">
                                            <button id="Submit" class="btn btn-default" type="Submit">Login</button>
                                            &nbsp;&nbsp;
                                        </div>
                                        <div class="col-md-5">
                                            <a target="_blank" id="Submit33" href="forgot-password.php"  >Forgot Password - Click Here</a>
                                        </div>
                                      </div>
                                     
                                    </fieldset>
                                  </form>    
                                  
                                <br>
                                   
                                </div>
                                    
            
        </div>
    </body>
</html>
