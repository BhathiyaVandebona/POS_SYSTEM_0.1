<?php

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
        $DEA_no=$_POST['dea_no'];
        $Sp_area=$_POST['speciality'];
        $H_hours=$_POST['h_for_week'];


        $query="insert into employee(employee_name,employee_address,working_status,employee_contact_no,staff_type) values ('$Name','$Address','$W_status','$Contact_no','Medical')"; 
        $result1=mysqli_query($conn,$query);
        //$sqlx="select treatment_code from test where test_code='$Testcode'";
        $Emp_id=mysqli_insert_id($conn);//mysqli_query($conn,$sqlx);
        //$row=mysqli_fetch_array($x);
        $query2="insert into med_staff(employee_id,med_council_no,resign_date,joined_date,job_type) values('$Emp_id','$Med_no','$R_date','$J_date','Doctor')"; "insert into doctors('$Emp_id','$DEA_no','$Sp_area')";"insert into assined('$Emp_id','$U_num','$H_hours')";
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