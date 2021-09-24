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
            <h1 class="sub-title">Treatments</h1>
        </div>
        <div class="form-section">
        <form action="loginprocess.php" method="post">
            <h2 class="form-heading">Add a new treatment</h2>
                <label for="doc_id">Doctor ID:</label>
                <select name="doc_id" >
                        <option value="Liquid">Liquid</option>
                        <option value="Tablets">Tablets</option>       
                </select>
                <label for="treat_no">Treatment No:</label>
                <select name="treat_no" >
                        <option value="Liquid">Liquid</option>
                        <option value="Tablets">Tablets</option>       
                </select>
                <label for="p_id">Patient ID:</label>
                <select name="p_id" >
                        <option value="Liquid">Liquid</option>
                        <option value="Tablets">Tablets</option>       
                </select>
                <label for="date">Date:</label>
                <input type="date" name="date" placeholder="Date" required><br>
                <label for="time">Time:</label>
                <input type="time" name="time" placeholder="Time" required><br>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="login">Enter</button>
                    <button type="reset" class="form-btn-1" name="login">Reset</button>   
                </div>
        </form>
        </div>
</body>
</html>