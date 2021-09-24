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
            <h1 class="sub-title">Patient Care Units</h1>
        </div>
        <div class="form-section">
        <form action="loginprocess.php" method="post">
            <h2 class="form-heading">Add a new ward</h2>
                <label for="ward_id">Ward Id:</label>
                <input type="text" name="ward_id" placeholder="Ward Id" required><br>
                <label for="name">Ward Name:</label>
                <input type="text" name="name" placeholder="Ward Name" required><br>
                <label for="ward_manager">Ward Manager:</label>
                <select name="ward_manager" >
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