<?php 
// include database and object files 
include (dirname(__FILE__).'/../config/db.php');
//print_r($_POST);
//exit();
//if(!isset($_POST['is_nat_mandatory']))$_POST['is_nat_mandatory']=0;

    // we need to insert
foreach($_POST['grams'] as $description=>$grams_value){
    
        // update needs to run
        $insert_program_critria_query = " UPDATE `spotprices` SET "
                . " `price_per_gram` = '".$grams_value."',"
                . " `price_date` = '".date("Y-m-d")."' "
                . " WHERE id = '$description'"
                
                . " ;";
    
    $conn->query($insert_program_critria_query)or die($conn->error.__LINE__);
}
echo "Spot Prices was updated.";
?>