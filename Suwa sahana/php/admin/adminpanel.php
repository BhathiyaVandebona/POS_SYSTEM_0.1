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
            <h1 class="sub-title">ADMIN PANEL</h1>
        </div>
        <div class="form-section">
        <form action="loginprocess.php" method="post">
            <h2 class="form-heading">Choose a option :</h2>
                <div class="form-section-button">
                    <label  for="doctors">Add doctor details, update, remove :</label>
                    <button type="Submit" class="form-btn-panel" name="doctors">Doctors</button>
                    <label  for="doctors">Add nurse details, update, remove :</label>
                    <button type="Submit" class="form-btn-panel" name="nurse">Nurse</button>
                    <label  for="doctors">Add patient details, update, remove :</label>
                    <button type="Submit" class="form-btn-panel" name="patient">Patients</button>
                    <label  for="non_med">Add Non-medical staff's details, update, remove :</label>
                    <button type="Submit" class="form-btn-panel" name="non_med"> Non-medical staff</button>
                    <label  for="treatments">Add Treatments details, update, remove :</label>
                    <button type="Submit" class="form-btn-panel" name="treatments">Treatments</button>
                    <label  for="venders">Add Venders details, update, remove :</label>
                    <button type="Submit" class="form-btn-panel" name="venders">Venders</button>
   
                </div>
        </form>
        </div>
</body>
</html>