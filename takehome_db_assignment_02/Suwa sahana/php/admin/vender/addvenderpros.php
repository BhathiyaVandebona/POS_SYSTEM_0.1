<?php
    require_once("../../conn.php");

    if (isset($_POST['enter'])) {
        $RegNo= $_POST['reg_no'];
        $Name = $_POST['name'];
        $Address = $_POST['address'];
        $ContactNo =$_POST['contact_no'];

        $sql ="select * from vendor where vendor_reg_no='$$RegNo'";
        $result= mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)>=1) {
            echo '<script>alert("Vendor is already Existed")</script>';
            ?>
            <script language="Javascript">
                         window.location="addvender.php";
            </script>
            <?php
        }
        else
        {
            $query= "insert into vendor(vendor_reg_no,vendor_name,vendor_address,vendor_contact_no) values ('$RegNo','$Name','$Address','$ContactNo')";

            if(mysqli_query($conn,$query))
            {
                
                echo '<script>alert("Scuessfully added.. ")</script>';
                ?>
                <script language="Javascript">
                    window.location="addvender.php";
                </script>
                <?php
                    
            }
            else {
                echo '<script>alert("Error...! ")</script>';
                ?>
                <script language="Javascript">
                    window.location="addvender.php";
                </script>
                <?php
            }
        }
    }



?>