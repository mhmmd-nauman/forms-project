<?php 
// include database and object files 
include (dirname(__FILE__).'/../config/db.php');
//print_r($_POST);
//exit();
//if(!isset($_POST['is_nat_mandatory']))$_POST['is_nat_mandatory']=0;

    // we need to insert
$diamonds_sql="SELECT * FROM collectables where "
     . "  type = 'Diamonds' "
     . " and `date` = date('".date("Y-m-d")."')"
     . " and enter_by = '".$_SESSION["admin_id"]."';";
    $spot_prices_resultset = $conn->query($diamonds_sql);
if($spot_prices_resultset->num_rows == 0){
    foreach($_POST['Colour'] as $key=>$value){
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
                    . " '".$value."', "
                    . " '".$_POST['Clarity'][$key]."', "
                    . " '".$_POST['Approximatevalue'][$key]."', "
                    . " '".$_POST['Paid'][$key]."', "
                    . " '".date("Y-m-d")."', "
                    . "  "
                    . " '".$_SESSION["admin_id"]."' "
                    . ");";
        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
    }
}else{
        // update needs to run
   // print_r($_POST);
    foreach($_POST['Colour'] as $key=>$value){
         $insert_program_critria_query = " UPDATE `collectables` SET "
                . " `color` = '".$_POST['Colour'][$key]."', "
                . " `clarity` = '".$_POST['Clarity'][$key]."', "
                . " `appoximate_value` = '".$_POST['Approximatevalue'][$key]."', "
                . " `paid` = '".$_POST['Paid'][$key]."' "
                . " WHERE id = '$key'"
                . " and enter_by = '".$_SESSION["admin_id"]."'"
                . " and `date` = date('".date("Y-m-d")."') ;";
        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
    }
}
// now handle watches
foreach($_POST['brand'] as $key=>$value){
         $insert_program_critria_query = " UPDATE `collectables` SET "
                . " `brand` = '".$_POST['brand'][$key]."', "
                . " `appoximate_value` = '".$_POST['Approximatevalue'][$key]."', "
                . " `paid` = '".$_POST['Paid'][$key]."' "
                . " WHERE id = '$key'"
                . " and enter_by = '".$_SESSION["admin_id"]."'"
                . " and `date` = date('".date("Y-m-d")."') ;";
        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
    }
// now handle coins
foreach($_POST['coin_bank_type'] as $key=>$value){
         $insert_program_critria_query = " UPDATE `collectables` SET "
                . " `coin_bank_type` = '".$_POST['coin_bank_type'][$key]."', "
                . " `year` = '".$_POST['year'][$key]."', "
                . " `appoximate_value` = '".$_POST['Approximatevalue'][$key]."', "
                . " `paid` = '".$_POST['Paid'][$key]."' "
                . " WHERE id = '$key'"
                . " and enter_by = '".$_SESSION["admin_id"]."'"
                . " and `date` = date('".date("Y-m-d")."') ;";
        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
    }   
// now handle Jewellery
foreach($_POST['description'] as $key=>$value){
         $insert_program_critria_query = " UPDATE `collectables` SET "
                . " `description` = '".$_POST['description'][$key]."', "
                . " `appoximate_value` = '".$_POST['Approximatevalue'][$key]."', "
                . " `paid` = '".$_POST['Paid'][$key]."' "
                . " WHERE id = '$key'"
                . " and enter_by = '".$_SESSION["admin_id"]."'"
                . " and `date` = date('".date("Y-m-d")."') ;";
        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
    }
// handle invoices
foreach($_POST['paid_invoice'] as $key=>$value){
         $insert_program_critria_query = " UPDATE `invoices` SET "
                . " `cheque_no` = '".$_POST['cheque_no'][$key]."', "
                . " `paid_by` = '".$_POST['paid_by'][$key]."', "
                . " `paid` = '".$_POST['paid_invoice'][$key]."' "
                . " WHERE id = '$key'"
                . " and enter_by = '".$_SESSION["admin_id"]."'"
                . " and `date` = date('".date("Y-m-d")."') ;";
        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
    }
// handle expenses
foreach($_POST['exp_description'] as $key=>$value){
         $insert_program_critria_query = " UPDATE `expenses` SET "
                . " `description` = '".$_POST['exp_description'][$key]."', "
                . " `amount` = '".$_POST['exp_amount'][$key]."' "
                . " WHERE id = '$key'"
                . " and enter_by = '".$_SESSION["admin_id"]."'"
                . " and `date` = date('".date("Y-m-d")."') ;";
        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
    }
echo "Saved!";
?>