<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
       
</head>
<body>
    
        <div>
            <h1 class="sub-title">Patients</h1>
        </div>
        <div class="form-section">
        <form action="loginprocess.php" method="post">
            <h2 class="form-heading">Add a new in Patient</h2>
                <label for="name">name:</label>
                <input type="text" name="name" placeholder="name" required><br>
                <label for="addmitted_date">Addmitted Date:</label>
                <input type="date" name="addmitted_date" placeholder="Addmitte Date" required><br>
                <label for="addmitted_time">Addmitted Time:</label>
                <input type="time" name="addmitted_time" placeholder="Addmitte Time" required><br>
                <label for="dob">Date of Birth:</label>
                <input type="date" name="dob" placeholder="Date of Birth" required><br>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="login">Enter</button>
                    <button type="reset" class="form-btn-1" name="login">Reset</button>   
                </div>
        </form>
        </div>
</body>
</html>