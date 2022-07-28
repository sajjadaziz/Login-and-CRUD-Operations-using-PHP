<!DOCTYPE html>
<html>
    <head>
        <title>Add User</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login-box">
            <h1>Add User</h1>
            <form action="#" method="post">
                <input type="text" class="form" placeholder="First Name" name="fname" required="Required">
                <input type="text" class="form" placeholder="Last Name" name="lname" required="Required">
                <input type="text" class="form" placeholder="Phone Number" name="phone_no">
                <input type="email" class="form" placeholder="Email" name="email" required="Required">
                <input type="password" class="form" placeholder="Password" name="password" required="Required">
                <input type="text" class="form" placeholder="Address" name="address">
                <input class="button" type="submit" name="add_user" value="Add User">
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
        if(isset($_POST['add_user'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $phone_no = $_POST['phone_no'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $insert = "insert into login(Fname, Lname, Phone_no, Email, Password, Address) values('$fname', '$lname', '$phone_no', '$email', '$password', '$address')";
            if(mysqli_query($con, $insert))
                echo "<script>window.open('login.php','_self');</script>";
            else
                echo "Failed to insert data, Try Again!";
        }
        ?>
    </body>
</html>