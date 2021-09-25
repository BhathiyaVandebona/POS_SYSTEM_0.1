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
            <h1 class="sub-title">NON-Medical Staff</h1>
        </div>
        <div class="form-section">
        <form action="addattendent.php" method="post">
            <h2 class="form-heading">Add a new Attendent</h2>
                <label for="name">name:</label>
                <input type="text" name="name" placeholder="name" required><br>
                <label for="address">Address:</label>
                <input type="text"  name="address" placeholder="address" required><br>
                <label for="contact no">Contact no:</label>
                <input type="text"  name="contact no" placeholder="Contact no" required><br>
                <label for="hourly_rate">Hourly Rate:</label>
                <input type="text"  name="hourly_rate" placeholder="Hourly Rate" required><br>
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
                <select name="working-status" >
                        <option value="Full time">Full Time</option>
                        <option value="Part time">Part time</option>
                </select>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="enter">Enter</button>
                    <button type="reset" class="form-btn-1" name="reset">Reset</button>   
                </div>
        </form>
        </div>
</body>
</html>