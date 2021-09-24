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
            <h1 class="sub-title">Patient's Report</h1>
        </div>
        <div class="form-section">
        <form action="loginprocess.php" method="post">
            <h2 class="form-heading">Add a new Report</h2>
                <label for="nurse_id">Nurse ID:</label>
                <select name="nurse_id" >
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
                <label for="symptoms">Symptoms:</label>
                <label for="temp">Tempreture:</label>
                <input type="text" name="temp" placeholder="Tempreture" required><br>
                <label for="weight">Weight:</label>
                <input type="text" name="weight" placeholder="Weight" required><br>
                <label for="blood_pressure">Blood_pressure:</label>
                <input type="text" name="blood_pressure" placeholder="Blood_pressure" required><br>
                <label for="pulse">Pulse:</label>
                <input type="text" name="pulse" placeholder="Pulse" required><br>
                <textarea name="symptoms" cols="35" rows="10" placeholder="Symptoms">
                </textarea>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="login">Enter</button>
                    <button type="reset" class="form-btn-1" name="login">Reset</button>   
                </div>
        </form>
        </div>
</body>
</html>