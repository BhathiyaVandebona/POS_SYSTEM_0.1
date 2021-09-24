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
            <h1 class="sub-title-view">Diagonis</h1>
        </div>
        <div class="form-section" >
            <form action="search.php" method= "POST" >
                <input type="text" name="item" placeholder="ID" ><br>
                <select name="type" >
                        <option value="all">ALL</option>
                        <option value="doc">Doctor ID</option>
                        <option value="pat">Patient ID</option>
                </select>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="search">Search</button>  
                </div>
            </form>
        </div>
        <div class="table-section">
        <table>
            <tr id="one">
                <th>Patient ID</th>
                <th>Doctor ID</th>
                <th>name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Description</th>
                <th>Update Infomation</th>
                <th>Delete record</th>
            </tr>
            
            
        </table>
        
        </div>
</body>
</html>