<!DOCTYPE HTML>
<html>
    <head>
        <title>Delete User Account</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login-box">
            <h1>Delete Account</h1>
            <form action="#" method="post">
                <input type="email" class="form" placeholder="Email" name="email" required="Required">
                <input type="password" class="form" placeholder="Password" name="password" required="Required">
                <input class="button" type="submit" name="delete" value="Delete">
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
        if(isset($_POST['delete'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $del = "delete from login where Email = '$email' and Password = '$password'";
            $result = mysqli_query($con, $del);
            if($result)
                echo "<script>window.open('read.php','_self');</script>";
            else
                echo "Email or Password is incorrect!";
        }
        ?>
    </body>
</html>