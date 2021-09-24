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
            <h1 class="sub-title">Vender</h1>
        </div>
        <div class="form-section">
        <form action="loginprocess.php" method="post">
            <h2 class="form-heading">Add a new Supply Details</h2>
                <label for="vreg_no">Vender Registration No:</label>
                <select name="vreg_no" >
                        <option value="Liquid">Liquid</option>
                        <option value="Tablets">Tablets</option>       
                </select>
                <label for="drug_code">Drug code:</label>
                <select name="drug_code" >
                        <option value="Liquid">Liquid</option>
                        <option value="Tablets">Tablets</option>       
                </select>
                <label for="type">Type:</label>
                <select name="type" >
                        <option value="Liquid">Liquid</option>
                        <option value="Tablets">Tablets</option>       
                </select>
                <label for="date">Bill Date:</label>
                <input type="date" name="date" placeholder="Bill Date" required><br>
                <label for="u_cost">Unit Cost:</label>
                <input type="text" name="u_cost" placeholder="Unit Cost" required><br>
                <label for="quantity">Quantity:</label>
                <input type="text" name="quantity" placeholder="Quantity" required><br>
                <div class="form-section-button">
                    <button type="Submit" class="form-btn" name="login">Enter</button>
                    <button type="reset" class="form-btn-1" name="login">Reset</button>   
                </div>
        </form>
        </div>
</body>
</html>