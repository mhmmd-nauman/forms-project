<?php 
    define("SERVER", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DB", "forms");

$conn = mysqli_connect(SERVER, USER, PASSWORD) or die ('Error connecting to mysql'); 
mysqli_select_db($conn, DB)or die ('Error selecting to db');

session_start();



define("SITE_URL", "http://localhost/forms/");
define("SITE_TITLE", "Forms Manager");


