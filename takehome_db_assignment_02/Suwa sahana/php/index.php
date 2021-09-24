<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
       
</head>
<body>
    
        <div>
            <h1 class="hos-title">SUWA SAHANA HOSPITAL</h1>
        </div>
        <div class="form-section">
        <form action="loginprocess.php" method="post">
            <h2 class="form-heading">Login</h2>
                <label for="name">ID:</label>
                <input type="text" id="id" name="id" placeholder="ID"><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password"><br>
                    <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="login">Login</button>
                    <button type="reset" class="form-btn-1" name="login">Reset</button>
                    </div>
        </form>
        </div>
</body>
</html>