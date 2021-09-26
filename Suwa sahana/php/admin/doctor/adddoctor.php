<?php
    require_once("../../conn.php");
    $sql="SELECT patient_care_unit_id FROM patient_care_unit";
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
            <h1 class="sub-title">Doctors</h1>
        </div>
        <div class="form-section">
        <form action="adddoctorpros.php" method="post">
            <h2 class="form-heading">Add a new doctor</h2>
                <label for="name">name:</label>
                <input type="text" name="name" placeholder="name" required><br>
                <label for="address">Address:</label>
                <input type="text"  name="address" placeholder="address" required><br>
                <label for="contact no">Contact no:</label>
                <input type="text"  name="contact no" placeholder="Contact no" required><br>
                <label for="medical_co_no">Medical Council No:</label>
                <input type="text"  name="medical_co_no" placeholder="Medical Council No" required><br>
                <label for="joined_date">Joined Date:</label>
                <input type="date" name="joined_date" placeholder="Joined Date" required><br>
                <label for="resigned_date">Resigned Date:</label>
                <input type="date" name="resigned_date" placeholder="Resigned Date"><br>
                <label for="dea_no">DEA no:</label>
                <input type="text"  name="dea_no" placeholder="DEA no" required><br>
                <label for="speciality">Area of Speciality:</label>
                <select name="speciality" >
                        <option value="neurology">Neurology</option>
                        <option value="family_medicine">Family medicine</option>
                        <option value="internal_medicine">Internal medicine</option>
                        <option value="surgery">Surgery</option>
                        <option value="pathology">Pathology</option>
                </select>
                <label for="unit_no">Unit NO:</label>
                <select name="unit_no" >
                        <?php while($row = mysqli_fetch_array($result))
                        {
                        ?>
                            <option value="<?php echo $row["patient_care_unit_id"]; ?>"><?php echo $row["patient_care_unit_id"]; ?></option>
                        <?php
                        }
                        ?>      
                </select>
                <label for="h_for_week">No of Hours For Week:</label>
                <input type="text"  name="h_for_week" placeholder="No of Hours For Week" required><br>
                <label for="working-status">Working Status:</label>
                <select name="working_status" >
                        <option value="">Select Type</option>
                        <option value="Full_time">Full Time</option>
                        <option value="Part_time">Part time</option>
                </select>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="enter">Enter</button>
                    <button type="reset" class="form-btn-1" name="enter">Reset</button>   
                </div>
        </form>
        </div>
</body>
</html>