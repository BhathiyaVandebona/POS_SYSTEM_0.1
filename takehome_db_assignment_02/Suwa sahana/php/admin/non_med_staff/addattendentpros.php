<?php
    require_once("../../conn.php");

    if (isset($_POST['enter'])) {
        $Name = $_POST['name'];
        $Address=$_POST['address'];
        $Contact_no=$_POST['contact_no'];
        $H_rate=$_POST['hourly_rate'];
        $U_num=['unit_no'];
        $W_status=['working-status'];
        $H_hours=['h_for_week'];


        $query="insert into employee(employee_name,employee_address,working_status,employee_contact_no,staff_type) values ('$Name','$Address','$W_status','$Contact_no','Non-Medical')"; 
        $result1=mysqli_query($conn,$query);
        
        $Emp_id=mysqli_insert_id($conn);

        $query2="insert into non_med_staff(employee_id,job_type) values ('$Emp_id','Attendent')"; "insert into attendants('$Emp_id','$H_rate')";"insert into assined('$Emp_id','$U_num','$H_hours')";

        $result2=mysqli_query($conn,$query2);
        

        if ($result1 && $result2) {
            echo '<script>alert("Scuessfully added.. ")</script>';
            ?>
            <script language="Javascript">
                window.location="addattendent.php";
            </script>
            <?php
        }
        else {
            echo '<script>alert("Error.. ")</script>';
            ?>
            <script language="Javascript">
                window.location="addattendent.php";
            </script>
            <?php
        }

    }

?>
