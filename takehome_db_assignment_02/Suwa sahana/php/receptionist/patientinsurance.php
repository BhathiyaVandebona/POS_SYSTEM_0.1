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
            <h2 class="form-heading">Add Insurance Company Details</h2>
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Name" required><br>
                <label for="bname">Branch Name:</label>
                <input type="text"  name="bname" placeholder="Branch Name" required><br>
                <label for="baddress">Branch Address:</label>
                <input type="text"  name="baddress" placeholder="Branch Address" required><br>
                <label for="subfname">Subscribers First Name:</label>
                <input type="text" name="subfname" placeholder="Subscribers First Name" required><br>
                <label for="sublname">Subscribers Last Name:</label>
                <input type="text" name="sublnamee" placeholder="Subscribers Last Name" required><br>
                <label for="relationship">Relationship to Patient:</label>
                <input type="text"  name="relationship" placeholder="Relationship to Patient" required><br>
                <label for="contact no">Contact no:</label>
                <input type="text"  name="contact no" placeholder="Contact no" required><br>
                <label for="subaddress">Subscriber's Address:</label>
                <input type="text"  name="address" placeholder="Subscriber's Address" required><br>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="login">Enter</button>
                    <button type="reset" class="form-btn-1" name="login">Reset</button>   
                </div>
        </form>
        </div>
</body>
</html>