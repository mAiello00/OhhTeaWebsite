<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "@@DnDIWLv8@@SDM20212022";
    $dbname = "ohhtea";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno())
    {
        die("database connection failed:".mysqli_connect_errno()."(".mysqli_connect_errno().")");
    }
?>