<?php 
// include database and object files 
include (dirname(__FILE__).'/../config/db.php');
//print_r($_POST);
//exit();
//if(!isset($_POST['is_nat_mandatory']))$_POST['is_nat_mandatory']=0;

    // we need to insert
foreach($_POST['grams'] as $description=>$grams_value){
    
    //check if already exist or not
    $spot_prices_sql="SELECT * FROM gold where "
     . " `description` = '$description'"
     . " and `date` = date('".date("Y-m-d")."')"
     . " and enter_by = '".$_SESSION["admin_id"]."';";
    $spot_prices_resultset = $conn->query($spot_prices_sql);
    if($spot_prices_resultset->num_rows == 0){
        $insert_program_critria_query = " INSERT INTO `gold` "
                . "(`id`, "
                . "`description`, "
                . "`grams`, "
                . "`date`,"
                . "`enter_by`"
                . ") VALUES ("
                . " NULL, " // id
                . " '".$description."', "
                . " '".$grams_value."', "
                . " '".date("Y-m-d")."', "
                . "  "
                . " '".$_SESSION["admin_id"]."' "
                . ");";
    }else{
        // update needs to run
        $insert_program_critria_query = " UPDATE `gold` SET `grams` = '".$grams_value."' "
                . " WHERE description = '$description'"
                . " and enter_by = '".$_SESSION["admin_id"]."'"
                . " and `date` = date('".date("Y-m-d")."') ;";
    }
    $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
}
echo "Data was Inserted.";
?>