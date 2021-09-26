<?php
    include "../../includes/id_parser.inc.php";
    require_once("../../conn.php");

    if (isset($_POST['enter'])) {
        $Name = $_POST['name'];
        $Address=$_POST['address'];
        $Contact_no=$_POST['contact_no'];
        $Med_no=$_POST['medical_co_no'];
        $J_date=$_POST['joined_date'];
        $R_date=$_POST['resigned_date'];
        $W_status=$_POST['working_status'];
        $U_num=$_POST['unit_no'];
        $Job_type=$_POST['job_type'];
        $H_hours=$_POST['h_for_week'];

        $employee_id;
        $sql_str = "SELECT employee_id FROM employee ORDER BY employee_id DESC LIMIT 1;";
		$results = mysqli_query($connection,$sql_str);
		$resultcheck = mysqli_num_rows($results);

		if($resultcheck > 0){
			while($row = mysqli_fetch_assoc($results)){

				$employee_id = $row['pno'];
				//echo "The old pnumber is:$employee_id<br>";
				$employee_id = parseKey($employee_id,"MDN");
				//echo "The new pno is:$employee_id<br>";
			}
		}else{
			echo "$resultcheck<br>";
			echo "There was problem<br>";
		}

        $query="insert into employee(employee_id,employee_name,employee_address,working_status,employee_contact_no,staff_type) values ('$employee_id','$Name','$Address','$W_status','$Contact_no','Medical')";
        $result1=mysqli_query($conn,$query);

        $query2="insert into med_staff(employee_id,med_council_no,resign_date,joined_date,job_type) values('$employee_id','$Med_no','$R_date','$J_date','Nurse')";"insert into assined('$employee_id','$U_num','$H_hours')";
        $result2=mysqli_query($conn,$query2);

        if ($result1 && $result2) {
            /*echo '<script>alert("Scuessfully added.. ")</script>';
            ?>
            <script language="Javascript">
                window.location="adddotcor.php";
            </script>
            <?php*/
        }
        else {
            /*echo '<script>alert("Error.. ")</script>';
            ?>
            <script language="Javascript">
                window.location="adddotcor.php";
            </script>
            <?php*/
        }
    }

?>