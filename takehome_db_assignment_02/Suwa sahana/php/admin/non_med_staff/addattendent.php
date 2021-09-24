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
        <form action="loginprocess.php" method="post">
            <h2 class="form-heading">Add a new Attendent</h2>
                <label for="name">name:</label>
                <input type="text" name="name" placeholder="name" required><br>
                <label for="address">Address:</label>
                <input type="text"  name="address" placeholder="address" required><br>
                <label for="contact no">Contact no:</label>
                <input type="text"  name="contact no" placeholder="Contact no" required><br>
                <label for="hourly_rate">Hourly Rate:</label>
                <input type="text"  name="hourly_rate" placeholder="Hourly Rate" required><br>
                <label for="hourly_rate">Hourly Rate:</label>
                <input type="text"  name="hourly_rate" placeholder="Hourly Rate" required><br>
                <label for="unit_no">Unit NO:</label>
                <select name="unit_no" >
                        <option value="Liquid">Liquid</option>
                        <option value="Tablets">Tablets</option>
                </select>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="login">Enter</button>
                    <button type="reset" class="form-btn-1" name="login">Reset</button>   
                </div>
        </form>
        </div>
</body>
</html>