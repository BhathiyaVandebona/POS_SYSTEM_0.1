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
            <h1 class="sub-title">Admit a Patient</h1>
        </div>
        <div class="form-section">
        <form action="loginprocess.php" method="post">
            <h2 class="form-heading">Add admit details</h2>
                <label for="bed_id">Bed ID:</label>
                <select name="bed_id" >
                        <option value="Liquid">Liquid</option>
                        <option value="Tablets">Tablets</option>       
                </select>
                <label for="ward_id">Ward ID:</label>
                <select name="Ward_id" >
                        <option value="Liquid">Liquid</option>
                        <option value="Tablets">Tablets</option>       
                </select>
                <label for="p_id">Patient ID:</label>
                <select name="p_id" >
                        <option value="Liquid">Liquid</option>
                        <option value="Tablets">Tablets</option>       
                </select>
                <label for="doc_id">Doctor ID:</label>
                <select name="doc_id" >
                        <option value="Liquid">Liquid</option>
                        <option value="Tablets">Tablets</option>       
                </select>
                <label for="admit_date">Admit Date:</label>
                <input type="date" name="admit_date" placeholder="Admit Date" required><br>
                <label for="admit_time">Admit Time:</label>
                <input type="admit_time" name="time" placeholder="Admit Time" required><br>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="login">Enter</button>
                    <button type="reset" class="form-btn-1" name="login">Reset</button>   
                </div>
        </form>
        </div>
</body>
</html>