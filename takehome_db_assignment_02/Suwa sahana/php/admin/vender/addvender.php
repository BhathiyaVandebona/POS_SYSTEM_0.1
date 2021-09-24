<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>ADD Vendor</title>
       
</head>
<body>
    
        <div>
            <h1 class="sub-title">Vendor</h1>
        </div>
        <div class="form-section">
        <form action="addvenderpros.php" method="post">
            <h2 class="form-heading">Add a new vendor</h2>
                <label for="reg_no">Registration No:</label>
                <input type="text" name="reg_no" placeholder="Registration No Eg:V001" required><br>
                <label for="name">name:</label>
                <input type="text" name="name" placeholder="name" required><br>
                <label for="address">Address:</label>
                <input type="text"  name="address" placeholder="address" required><br>
                <label for="contact_no">Contact no:</label>
                <input type="text"  name="contact_no" placeholder="Contact no" required><br>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="enter">Enter</button>
                    <button type="reset" class="form-btn-1" name="reset">Reset</button>   
                </div>
        </form>
        </div>
</body>
</html>