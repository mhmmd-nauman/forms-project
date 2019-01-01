<?php 
// include database and object files 
include (dirname(__FILE__).'/../config/db.php');
//print_r($_POST);
//if(!isset($_POST['is_nat_mandatory']))$_POST['is_nat_mandatory']=0;

    // we need to insert
    $insert_program_critria_query = " INSERT INTO `gold` "
            . "(`id`, "
            . "`description`, "
            . "`grams`, "
            . "`date`,"
            . "`enter_by`"
            . ") VALUES ("
            . " NULL, " // id
            . " '".$_POST['description']."', "
            . " '".$_POST['grams']."', "
            . " '".date("Y-m-d h:i:s")."', "
            . "  "
            . " '".$_SESSION["admin_id"]."' "
            . ");";
    $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);

echo "Gold was Inserted.";
?>