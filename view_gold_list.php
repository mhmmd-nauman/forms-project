<?php 
include_once 'config/db.php';
include_once 'config/variables.php'; 
if(empty($_SESSION["admin_id"])){
    header("Location:index.php?relogin=1");
    exit();
}
function cleanData(&$str)
{
  $str = preg_replace("/\t/", "\\t", $str);
  $str = preg_replace("/\r?\n/", "\\n", $str);
  if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}
if(!empty($_GET['action'])){
    switch($_GET['action']){
        case"export_csv":
            $emp_code = $_REQUEST['emp_code'];
            $filename = $_REQUEST['name'] ." - ". date('d-m-Y') . ".xls";
            header("Content-Disposition: attachment; filename=\"$filename\"");
            header("Content-Type: application/vnd.ms-excel");
            $headings = [
                ["End of day"],
                [""],
                ["Employee",$_REQUEST['name']],
                ["Date",date("Y-m-d")],
                ["Time",date("h:i:s")],
                [""],
                [""],
                ["Gold", "grams", "Price/Gram","Totals"]
            ];
             foreach($headings as $row) {
                // display field/column names as first row
                echo implode("\t", $row) . "\r\n";
            }
            $programs_sql="SELECT item,grams,gold.price_per_gram FROM gold "
                    . " INNER JOIN spotprices ON spotprices.id = gold.description "
                    . " and enter_by = '".$emp_code."' "
                    . " and type = 'Gold' "
                    . " ;";
            $programs_resultset = $conn->query($programs_sql);
            $total_grams = 0;
            $total_amount = 0;
            while($row = $programs_resultset->fetch_assoc()){
              //if($row['type'] == "Gold"){
                $row['Total'] = $row['grams']*$row['price_per_gram'];
                $total_grams = $total_grams + $row['grams'];
                $total_amount = $total_amount + $row['Total'];
                array_walk($row, __NAMESPACE__ . '\cleanData');
                echo implode("\t", array_values($row)) . "\r\n";
             // }
            }
            $bottom_total = [
                [""],
                ["Total",$total_grams,"",$total_amount]
                
            ];
            foreach($bottom_total as $row) {
                // display field/column names as first row
                echo implode("\t", $row) . "\r\n";
            }
            // Platinum
            $headings = [
                
                [""],
                [""],
                ["Platinum", "grams", "Price/Gram","Totals"]
            ];
             foreach($headings as $row) {
                // display field/column names as first row
                echo implode("\t", $row) . "\r\n";
            }
            $programs_sql="SELECT item,grams,gold.price_per_gram FROM gold "
                    . " INNER JOIN spotprices ON spotprices.id = gold.description "
                    . " and enter_by = '".$emp_code."' "
                    . " and type = 'Platinum' "
                    . " ;";
            $programs_resultset = $conn->query($programs_sql);
            $total_grams = 0;
            $total_amount = 0;
            while($row = $programs_resultset->fetch_assoc()){
              //if($row['type'] == "Gold"){
                $row['Total'] = $row['grams']*$row['price_per_gram'];
                $total_grams = $total_grams + $row['grams'];
                $total_amount = $total_amount + $row['Total'];
                array_walk($row, __NAMESPACE__ . '\cleanData');
                echo implode("\t", array_values($row)) . "\r\n";
             // }
            }
            $bottom_total = [
                [""],
                ["Total",$total_grams,"",$total_amount]
                
            ];
            foreach($bottom_total as $row) {
                // display field/column names as first row
                echo implode("\t", $row) . "\r\n";
            }
            // Silver
            $headings = [
                
                [""],
                [""],
                ["Silver", "grams", "Price/Gram","Totals"]
            ];
             foreach($headings as $row) {
                // display field/column names as first row
                echo implode("\t", $row) . "\r\n";
            }
            $programs_sql="SELECT item,grams,gold.price_per_gram FROM gold "
                    . " INNER JOIN spotprices ON spotprices.id = gold.description "
                    . " and enter_by = '".$emp_code."' "
                    . " and type = 'Silver' "
                    . " ;";
            $programs_resultset = $conn->query($programs_sql);
            $total_grams = 0;
            $total_amount = 0;
            while($row = $programs_resultset->fetch_assoc()){
              //if($row['type'] == "Gold"){
                $row['Total'] = $row['grams']*$row['price_per_gram'];
                $total_grams = $total_grams + $row['grams'];
                $total_amount = $total_amount + $row['Total'];
                array_walk($row, __NAMESPACE__ . '\cleanData');
                echo implode("\t", array_values($row)) . "\r\n";
             // }
            }
            $bottom_total = [
                [""],
                ["Total",$total_grams,"",$total_amount]
                
            ];
            foreach($bottom_total as $row) {
                // display field/column names as first row
                echo implode("\t", $row) . "\r\n";
            }
            exit;
            break;
    }
}


$search_status = "";

$programs_sql="SELECT * FROM gold "
        . " LEFT JOIN spotprices ON spotprices.id = gold.description "
        . " and enter_by = '".$_SESSION['admin_id']."' ";
$programs_resultset = $conn->query($programs_sql);

//print_r($_SESSION);

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
                            <div class="row" style="padding-top: 50px;">

                                <div class="col-md-4 ">
                                    <a  class=" btn btn-success btn-block" href="index-choice.php"  >Home</a>

                                </div>

                                 <div class="col-md-2">
                                     <a href="?action=export_csv" target="_blank"   class="btn btn-default btn-block"> Export</a>
                                 </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>
                            <div class="row">
                                <h4>Gold List</h4>
                            </div>
                            <div class="row" style="padding-top: 20px;">
                               <div class="col-md-12">
                                   <table class="table table-bordered table-responsive table-hover">
                                       <thead>
                                            <tr style="border:1px solid #000000; font-weight: bold;">
                                            <th width="5%">Sr.#</th>
                                            <th >Description</th>
                                            <th width="15%">Grams</th>
                                            <th width="15%">Action</th>


                                          </tr>
                                        </thead>
                                         <tbody>
                                            <?php

                                            if($programs_resultset->num_rows > 0){
                                                $i=1;

                                                while($row = $programs_resultset->fetch_assoc()){


                                                ?>
                                             <tr >
                                                    <td><?php echo  $i++;?></td>
                                                    <td>
                                                         <?php echo $row['item']; ?>
                                                    </td>

                                                    <td><?php echo $row['grams']; ?></td>


                                                    <td>later</td>



                                                </tr>
                                            <?php } }else{ ?>
                                                <tr><td colspan="4">There are no data remaining for this list.</td></tr>
                                            <?php } ?>
                                        </tbody>


                                   </table> 

                               </div> 
                            </div>
                        </div>
			
		</div>
		
    </body>
</html>
<?php include 'footer.php'; ?>
