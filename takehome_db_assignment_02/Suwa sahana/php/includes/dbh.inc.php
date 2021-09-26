<?php
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassward = "";
	$dbName = "spj";
  

  //the oder of the arguments must be given in the order mentioned in the document
	$connection = mysqli_connect($dbServername,$dbUsername,$dbPassward,$dbName);
	//this closing tag is not needed when the whole file is php only file
?>
