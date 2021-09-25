<?php
	require_once("../../conn.php");
    
    $a =$_POST['action'];
	$x = $_POST['del'];
	$c = $_POST['up'];
	if ($a=="delete"){
		$sql="DELETE * FROM doctors where employee_id='$x'";
        $result = mysqli_query($conn,$sql);
	}
    elseif ($a=="update") {
        ?>
            <script language="Javascript">
                window.location="adddotcor.php?emp=$c";
            </script>
        <?php
    }

?>