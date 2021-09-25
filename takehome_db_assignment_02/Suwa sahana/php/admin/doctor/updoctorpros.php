<?php

    require_once("../../conn.php");
    $emp=$_GET['emp'];

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


        $query="UPDATE employee SET employee_name='$Name',employee_address='$Address',working_status='$W_status',employee_contact_no='$Contact_no',staff_type='Medical' where employee_id=$emp"; 
        
        $query2="UPDATE med_staff SET med_council_no='$Med_no',resign_date='$R_date',joined_date='$J_date',job_type='Doctor' where employee_id=$emp"; "UPDATE doctors SET dea_no='$DEA_no', speciality_area='$Sp_area' where employee_id=$emp";"UPDATE assined SET patient_care_unit_id='$U_num', hours_per_week='$H_hours' where employee_id=$emp";
        $result2=mysqli_query($conn,$query2);
        

        if ($result1 && $result2) {
            /*echo '<script>alert("Scuessfully added.. ")</script>';
            ?>
            <script language="Javascript">
                window.location="viewdoctors.php";
            </script>
            <?php*/
        }
        else {
            /*echo '<script>alert("Error.. ")</script>';
            ?>
            <script language="Javascript">
                window.location="viewdoctors.php";
            </script>
            <?php*/
        }
    }

?>