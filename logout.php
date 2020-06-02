<?php 
    require('includes/connection.inc.php'); 
    session_destroy();

    header("Location: index.php");
?>