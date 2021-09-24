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
            <h1 class="sub-title">Nurse</h1>
        </div>
        <div class="form-section">
        <form action="loginprocess.php" method="post">
            <h2 class="form-heading">Add a new nurse</h2>
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
                <input type="date" name="resigned_date" placeholder="Resigned Date" required><br>
                <label for="unit_no">Unit NO:</label>
                <select name="unit_nor" >
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