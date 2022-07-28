<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login-box">
            <h1>Edit Account</h1>
            <?php
            $host = "localhost";
            $user = "root";
            $pass = "";
            $dbName = "ecommerce";
            $con = mysqli_connect($host,$user,$pass,$dbName);
            $u_email = $_GET['email'];
            $select = "select * from login where Email='$u_email'";
            $result = mysqli_query($con, $select);
            $data = mysqli_fetch_array($result);
            $fname = $data['Fname'];
            $lname = $data['Lname'];
            $phone_no = $data['Phone_no'];
            $email = $data['Email'];
            $password = $data['Password'];
            $address = $data['Address'];
            ?>
            <form action="#" method="post">
                <input type="text" class="form" placeholder="First Name" value="<?php echo $fname;?>" name="fname" required="Required">
                <input type="text" class="form" placeholder="Last Name" value="<?php echo $lname;?>" name="lname" required="Required">
                <input type="text" class="form" placeholder="Phone Number" value="<?php echo $phone_no;?>" name="phone_no">
                <input type="email" class="form" placeholder="Email" value="<?php echo $email;?>" name="email" required="Required">
                <input type="password" class="form" placeholder="Password" value="<?php echo $password;?>" name="password" required="Required">
                <input type="text" class="form" placeholder="Address" value="<?php echo $address;?>" name="address">
                <input class="button" type="submit" name="update" value="Update">
            </form>
        </div>
        <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbName = "ecommerce";
        $con = mysqli_connect($host,$user,$pass,$dbName);
        // if(mysqli_connect_error($con)){
        //     echo "Connection Failed";
        // }
        // else{
        //     echo "Connected";
        // }
        if(isset($_POST['update'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $phone_no = $_POST['phone_no'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $upd = "update login set Fname='$fname', Lname='$lname', Phone_no='$phone_no', Email='$email', Password='$password', Address='$address' where Email='$u_email'";
            if(mysqli_query($con, $upd))
                echo "<script>window.open('read.php','_self');</script>";
            else
                echo "Failed to update data, Try Again!";
        }
        ?>
    </body>
</html>