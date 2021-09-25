<?php
    require_once("../../conn.php");
    $sql="SELECT * FROM doctors";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Document</title>
       
</head>
<body>
    
        <div>
            <h1 class="sub-title-view">Doctors</h1>
        </div>
        <div class="table-section">
        <table>
            <tr id="one">
                <th>Employee ID</th>
                <th>Medical Council NO</th>
                <th>DEA no:</th>
                <th>Name</th>
                <th>Address</th>
                <th>Working Status</th>
                <th>Contact No</th>
                <th>Joined Date</th>
                <th>Resigned Date</th>
                <th>Area of Speciality</th>
                <th>Unit Id</th>
                <th>Hours per week</th>
                <th>Update Infomation</th>
                <th>Delete record</th>
            </tr>
        <?php while($row = mysqli_fetch_array($result))
                {
                    $emp_id=$row["employee_id"];
                    $sql1="SELECT * FROM med_staff where employee_id=$emp_id";
                    $result1 = mysqli_query($conn,$sql1);
                    $row1 = mysqli_fetch_array($result1);
                    $sql2="SELECT * FROM employee where employee_id=$emp_id";
                    $result2 = mysqli_query($conn,$sql1);  
                    $row2 = mysqli_fetch_array($result2);
                    $sql3="SELECT * FROM assined where employee_id=$emp_id";
                    $result3 = mysqli_query($conn,$sql1);  
                    $row3 = mysqli_fetch_array($result2);
        ?>
            <tr>
                <th><?php echo $row["employee_id"]; ?></th>
                <th><?php echo $row1["med_council_no"]; ?></th>
                <th><?php echo $row["dea_no"]; ?></th>
                <th><?php echo $row2["employee_name"]; ?></th>
                <th><?php echo $row2["employee_address"]; ?></th>
                <th><?php echo $row2["working_status"]; ?></th>
                <th><?php echo $row2["employee_contact_no"]; ?></th>
                <th><?php echo $row1["joined_date"]; ?></th>
                <th><?php echo $row1["resign_date"]; ?></th>
                <th><?php echo $row["speciality_area"]; ?></th>
                <th><?php echo $row3["patient_care_unit_id"]; ?></th>
                <th><?php echo $row3["hours_per_week"]; ?></th>
                <th>
                    <form action = "doctoraction.php" method = "POST">
                        <input name="emp_id" type="hidden" name="up" value="<?php echo $emp_id; ?><?php 
					            if(isset($_GET['up']))
					            {
                                    $_GET['up'];	
						        }
					            ?>">
                        <button type="Submit" class="form-btn" name="update">Update</button>                                          
                    </form>
                </th>
                <th>
                    <form action = "doctoraction.php" method = "POST">
                        <input name="emp_id" type="hidden" name="del" value="<?php echo $emp_id; ?><?php 
					            if(isset($_GET['del']))
					            {
                                    $_GET['del'];	
						        }
					            ?>">
                        <button type="Submit" class="form-btn-del" name="delete">Delete</button>                                          
                    </form>
                </th>
            </tr>
        <?php
            }
        ?>
            
        </table>
        
        </div>
</body>
</html>