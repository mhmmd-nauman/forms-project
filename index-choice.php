<?php 
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
include_once 'config/db.php';
include_once 'config/variables.php';
//print_r($_SESSION);
//exit(); 
if(empty($_SESSION["admin_id"])){
    header("Location:index.php?relogin=1");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo SITE_TITLE;?></title>
        <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" >
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="assets/jquery-3.1.1.min.js"></script>
        <script src="assets/bootstrap/dist/js/bootstrap.js" ></script>

    </head>
    <body>
		
        <div  class="container">
            <div class="row">

                <h1>Forms Project</h1>

            </div>
            <div class="row">
                   <nav class = "navbar navbar-default" role = "navigation">
                    
                    <div>
                      <ul class = "nav navbar-nav">
                          <li class = "active">
                              <a href = "index.php">Home</a>
                          </li>
                         
                         <li class = "dropdown">
                            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                               Metals 
                               <b class = "caret"></b>
                            </a>

                            <ul class = "dropdown-menu">
                               <li><a href = "#" data-toggle="modal" data-target="#goldModal"> Add New Gold </a></li>
                               <li><a href = "view_gold_list.php">View & Export Gold</a></li>
                               <li><a href = "#">Silver</a></li>
                            </ul>
                        </li>

                      </ul>
                   </div>

                </nav>
            </div>
				<div id="contents">
					<div id="wrapper">							
						<div id="home" class="main">
                                                    <?php if(isset($_REQUEST['error'])){ ?>
                                                    <div class="alert alert-danger" style="margin-top:10px;">
                                                            <strong>Error!</strong> <?php echo $_REQUEST['msg'];?>
                                                        </div>
                                                    <?php }?>
                                                    <?php if(isset($_REQUEST['success'])){ ?>
                                                    <div class="alert alert-success" style="margin-top:10px;">
                                                            <strong>Success!</strong> Marks updated
                                                        </div>
                                                    <?php }?>
                                                    <div class="row" style="padding-top: 5px;">
                                                        
                                                        <div class="col-md-4 ">
                                                           Welcome <?php echo $_SESSION['admin_name'];?>
                                                        </div>
                                                        <div class="col-md-4 col-md-offset-4 ">
                                                            <a href="logout.php"  class="btn btn-default btn-block"> Logout</a>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="padding-top: 50px;">
                                                        
                                                        <div class="col-md-4">
                                                        
                                                        
                                                        </div>
                                                       <div class="col-md-4">
                                                        <!--
                                                        <a class="btn btn-success btn-block" href="http://oadmissions.iub.edu.pk/nominations/" >Make Nominations </a>
                                                        -->
                                                        </div>
                                                        <div class="col-md-4 ">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row" style="padding-top: 50px;">
                                                       <div class="col-md-4">
                                                        
                                                        
                                                        </div> 
                                                    </div>
						</div>
					</div>
				</div>
			
		
    </body>
</html>
<?php include 'footer.php'; ?>
