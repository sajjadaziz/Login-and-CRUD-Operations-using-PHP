<!DOCTYPE HTML>
<html>
    <head>
        <title>Users Account</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <table cellpadding = "1" cellspacing = "1">
            <tr>
                <thead>
                    <td colspan="6"> User's Accounts </td>
                </thead>
                <thead>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Phone Number</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Address</td>
                </thead>
            </tr>
            <tr>
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
            $select = "select * from login";
            $result = mysqli_query($con, $select);
            while($rows=$result->fetch_assoc())
            {
            ?>
                <td><?php echo $rows['Fname'] ?></td>
                <td><?php echo $rows['Lname'] ?></td>
                <td><?php echo $rows['Phone_no'] ?></td>
                <td><?php echo $rows['Email'] ?></td>
                <td><?php echo $rows['Password'] ?></td>
                <td><?php echo $rows['Address'] ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>