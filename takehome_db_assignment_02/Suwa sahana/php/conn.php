<?php

$dbServername ="localhost:3308";
$dbUsername ="root";
$dbPassword ="";
$dbName ="suwa_sahana_db";

$conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

    if(!$conn)
    {
        echo ("Cannot connect to Database");
    }
    else
    {
        echo "Database Connected";
    }


?>