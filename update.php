<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login-box">
            <h1>Update Account</h1>
            <form action="#" method="post">
                <input type="email" class="form" placeholder="Email" name="email" required="Required">
                <input type="password" class="form" placeholder="Password" name="password" required="Required">
                <input class="button" type="submit" name="continue" value="Continue">
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
        if(isset($_POST['continue'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $select = "select Email, Password from login where Email = '$email' and Password = '$password'";
            $result = mysqli_query($con, $select);
            $data = mysqli_fetch_array($result);
            if($data)
                echo "<script>window.open('edit.php?email=$email','_self');</script>";
            else
                echo "Email or Password is incorrect!";
        }
        ?>
    </body>
</html>