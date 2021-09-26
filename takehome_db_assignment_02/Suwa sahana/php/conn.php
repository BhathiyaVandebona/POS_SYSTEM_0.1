<?php

$dbServername ="localhost:4000";//3308
$dbUsername ="root";
$dbPassword ="mysql";
$dbName ="temporary_database";

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