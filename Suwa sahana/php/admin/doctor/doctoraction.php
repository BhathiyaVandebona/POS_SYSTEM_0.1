<?php
	require_once("../../conn.php");
    
    $a =$_POST['action'];
	$x = $_POST['del'];
	$c = $_POST['up'];
	if ($a=="delete"){
		$sql="DELETE * FROM doctors where employee_id='$x'";
        $result = mysqli_query($conn,$sql);
        $sql1="DELETE * FROM med_staff where employee_id='$x'";
        $result1 = mysqli_query($conn,$sql1);
        $sql2="DELETE * FROM employee where employee_id='$x'";
        $result2 = mysqli_query($conn,$sql2);
	}
    elseif ($a=="update") {
        ?>
            <script language="Javascript">
                window.location="updatedoc.php?emp=$c";
            </script>
        <?php
    }

?>