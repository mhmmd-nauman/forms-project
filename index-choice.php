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

$grams_data = array();
$spot_prices_sql="SELECT * FROM gold where "
     . " "
     . "  `date` = date('".date("Y-m-d")."')"
     . " and enter_by = '".$_SESSION["admin_id"]."';";
    $spot_prices_resultset = $conn->query($spot_prices_sql);
    if($spot_prices_resultset->num_rows > 0){
        while($row = $spot_prices_resultset->fetch_assoc()){
            $grams_data[$row['description']] = $row['grams'];
        }
    }
//print_r($grams_data);
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
                  <?php include 'partials/nav.php';?>
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
                                                            <h4>Welcome <?php echo $_SESSION['admin_name'];?></h4>
                                                        </div>
                                                        <div class="col-md-4 col-md-offset-4 ">
                                                            <a href="logout.php"  class="btn btn-default btn-block"> Logout</a>
                                                        </div>
                                                    </div>
                                                   <?php if($_SESSION['admin_type_of_user'] != "Admin"){?>
                                                   <div class="row" style="padding-top: 5px;">
                                                       <div class="col-md-6">
                                                           <h4>Enter Form Details (<?php echo date("d-m-Y"); ?>)</h4>
                                                        
                                                        </div> 
                                                       <div class="col-md-6">
                                                           <h4>Metals</h4>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="row" style="padding-top: 5px;">
                                                       <div class="col-md-12">
                                                        <?php include 'partials/gold.php';?>
                                                        
                                                        </div> 
                                                    </div>
                                                    <div class="row" style="padding-top: 5px;">
                                                       <div class="col-md-12">
                                                       <h4>Collectibles</h4>
                                                        
                                                        </div> 
                                                    </div>
                                                    <div class="row" style="padding-top: 5px;">
                                                       <div class="col-md-12">
                                                        <?php include 'partials/collectables.php';?>
                                                        
                                                        </div> 
                                                    </div>
                                                   <?php }else{ ?>
                                                    <div class="row" style="padding-top: 5px;">
                                                       <div class="col-md-6">
                                                           <h4> Form Details (<?php echo date("d-m-Y"); ?>)</h4>
                                                        
                                                        </div> 
                                                       <div class="col-md-6">
                                                           
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="row" style="padding-top: 5px;">
                                                       <div class="col-md-12">
                                                        <?php
                                                        $spot_emp_sql="SELECT * FROM iuboa_admin_users where `type_of_user` = 'DIT Clerk'"
                                                                . "  ";
                                                        $spot_emp_resultset = $conn->query($spot_emp_sql);
                                                        ?>
                                                        <table class = "table table-bordered">
                                                            <thead>
                                                               <tr>
                                                                  <th>Name</th>
                                                                  <th>Email</th>
                                                                  <th>Action</th>
                                                                  <th>Export</th>
                                                               </tr>
                                                            </thead>

                                                            <tbody>
                                                              <?php
                                                                if($spot_emp_resultset->num_rows > 0){
                                                                while($row = $spot_emp_resultset->fetch_assoc()){
                                                                    ?>
                                                               <tr>
                                                                  <td><?php echo $row['user_name']?></td>
                                                                  <td><?php echo $row['login_id']?></td>
                                                                  <td>edit/del employees</td>
                                                                  <td><a href="view_gold_list.php?action=export_csv&emp_code=<?php echo $row['login_id']?>&name=<?php echo $row['user_name']?>" target="_blank"   class="btn btn-default btn-block"> Export</a></td>
                                                               </tr>
                                                               <?php }
                                                                }
                                                                ?>
                                                               
                                                            </tbody>

                                                         </table>
                                                        
                                                        </div> 
                                                    </div>
                                                   <?php }?>
						</div>
					</div>
				</div>
			
		
    </body>
</html>
<?php include 'footer.php'; ?>
