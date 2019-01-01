<?php	
    $email = $_POST['emailaddress_login'];
    $pass = $_POST['password_login'];
    $md5_pass = md5($pass);

    include './config/db.php';
    include_once './config/variables.php';
	
	
    $sql_test = "SELECT * FROM iuboa_admin_users "
            . " "
            . " WHERE `login_id` ='$email' "
           // . " AND user_password='$md5_pass' "
            . " AND status = 'Active' "
            . " AND type_of_user IN ("
            //. "'Focal Person',"
            . "'Admin',"
            . "'DIT Clerk'"
            . ") "
            . " ;"; 
    $result = mysqli_query($conn, $sql_test);
    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


        $_SESSION["admin_id"] = $row['login_id'];
        $_SESSION["admin_name"] = $row['user_name'];
        
        $_SESSION["admin_type_of_user"] = $row['type_of_user'];
        
        //echo $_SESSION["admin_name"] . ";" . $_SESSION["admin_id"] . ";" . $_SESSION["admin_prgramme_id"];
        mysqli_free_result($result);
        mysqli_close($conn);
        header("Location:index-choice.php?status=succ");
        exit();
    } else {
        mysqli_close($conn);
        header("Location:index.php?status=error&msg=Invalide login information!");
        exit();
    }
   
?>