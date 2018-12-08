<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SB Admin - Start Bootstrap Template</title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>
    <?php
    include "db_connect.php";
    $msg="";
    if (!empty($_POST)) {
        $query = mysql_query("Select * from user where user_email='$_POST[email]' and password='$_POST[password]'");
        $row=  mysql_fetch_array($query);
        $rows = mysql_num_rows($query);
        if ($rows > 0) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_email'] = $row['user_email'];
            echo "<script>alert('Login Successfully');location.replace('index.php');</script>";
        }else{
            $msg="Wrong User name or password.";
        }
    }
    ?>
    <body class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form method="POST" action="">
                        <?php
                        if(!empty($msg)){
                            echo "<div class='alert alert-danger' role='alert'>{$msg}</div>";
                        }
                        ?>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input class="form-control" id="email" name="email" type="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                        </div>
                        <input type="submit" value="Login" class="btn btn-success"/>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>

</html>
