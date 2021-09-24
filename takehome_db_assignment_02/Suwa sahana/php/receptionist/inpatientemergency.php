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
            <h1 class="sub-title">Patient</h1>
        </div>
        <div class="form-section">
        <form action="loginprocess.php" method="post">
            <h2 class="form-heading">Add a Emergency Contact Number</h2>
                <label for="fname">First Name:</label>
                <input type="text" name="fname" placeholder="First Name" required><br>
                <label for="lname">Last Name:</label>
                <input type="text"  name="lname" placeholder="Last Name" required><br>
                <label for="relationship">Relationship to Patient:</label>
                <input type="text"  name="relationship" placeholder="Relationship to Patient" required><br>
                <label for="address">Address:</label>
                <input type="text"  name="address" placeholder="Address" required><br>
                <label for="contact no">Contact no:</label>
                <input type="text"  name="contact no" placeholder="Contact no" required><br>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="login">Enter</button>
                    <button type="reset" class="form-btn-1" name="login">Reset</button>   
                </div>
        </form>
        </div>
</body>
</html>