<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login-box">
            <h1>Login</h1>
            <form action="#" method="post">
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Email" name="email" required="Required">
                </div>
                <div class="textbox">
                    <i class="fas fa-key"></i>
                    <input type="password" placeholder="Password" name="password" required="Required">
                </div>
                <input class="button" type="submit" name="Sign_in" value="Sign in">
                <a href="create.php">Create New Account!</a>
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
        if(isset($_POST['Sign_in'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $select = "select Email, Password from login where Email = '$email' and Password = '$password'";
            $result = mysqli_query($con, $select);
            $data = mysqli_fetch_array($result);
            if($data)
                echo "<script>window.open('index.html','_self');</script>";
            else{
                ?>
                <div class="login-message">
                <?php echo "Email or Password is incorrect!"; ?>
                </div>
                <?php
            }   
        }
        ?>
    </body>
</html>