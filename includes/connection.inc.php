<?php 
    //SAIT VPN
    // $server = "localhost";
    // $username = "jlaroche";
    // $password = "785579";
    // $db = "jlaroche_ftmt";

    //Local server
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "jlaroche_ftmt";

    //Hostinger server
    // $server = "localhost";
    // $username = "u781799175_jimmy";
    // $password = "Redbull7001";
    // $db = "u781799175_ftmt";

    $connection = mysqli_connect($server,$username,$password,$db);

    if(!$connection){
        die("Connection failed: " . mysqli_connect_error());
    }

	mysqli_set_charset($connection, "utf8");

    session_start();
?>