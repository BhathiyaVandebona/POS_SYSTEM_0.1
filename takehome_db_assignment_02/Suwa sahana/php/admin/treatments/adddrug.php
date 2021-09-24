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
            <h1 class="sub-title">Treatmets</h1>
        </div>
        <div class="form-section">
        <form action="adddrugpros.php" method="post">
            <h2 class="form-heading">Add a new Drug</h2>
                <label for="drug_code">Drug code:</label>
                <input type="text" name="drug_code" placeholder="Drug code" required><br>
                <label for="name">name:</label>
                <input type="text" name="name" placeholder="name" required><br>
                <label for="type">Type:</label>
                <select name="type" >
                        <option value="Liquid">Liquid</option>
                        <option value="Tablets">Tablets</option>       
                </select>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="enter">Enter</button>
                    <button type="reset" class="form-btn-1" name="reset">Reset</button>   
                </div>
        </form>
        </div>
</body>
</html>