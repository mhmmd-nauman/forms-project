<?php 
// include database and object files 
include (dirname(__FILE__).'/../config/db.php');
//print_r($_POST);
//exit();


// now handle watches
foreach($_POST['oth_exp_desc'] as $key=>$value){
         $insert_program_critria_query = " UPDATE `other_expenses` SET "
                . " `description` = '".$_POST['oth_exp_desc'][$key]."', "
                . " `amount` = '".$_POST['oth_exp_amt'][$key]."' "
                . " WHERE id = '$key'"
                . " and enter_by = '".$_SESSION["admin_id"]."'"
                . " and `date` = date('".date("Y-m-d")."') ;";
        $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
    }


echo "Data was Inserted.";
?>