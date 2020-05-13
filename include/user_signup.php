<?php
/**
 * Created by PhpStorm.
 * User: Kuldeep Dhaka
 * Date: 28-May-19
 * Time: 4:14 PM
 */

session_start();
if (isset($_SESSION['login_status'])){
    if ($_SESSION['login_status']==1)
        header("Location:profile.php");}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>School Information And Management System</title>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Library Management System for Maharaja College">
    <meta name="author" content="Kuldeep Dhaka & Sandeep Meena">
    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php include "include/header.php";?>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="card-container-signup">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h5 class="card-title text-light">INSTITUTE SIGNUP FORM</h5>
                    </div>
                    <form method="post" action="signup_process.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Enter Full Name</label>
                                <input class="form-control" type="text" name="fullname" required autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <label>Enter Email or DISC code</label>
                                <input class="form-control" type="email" name="email" required autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <label>Mobile Number</label>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+91</span>
                                </div>
                                <input class="form-control" type="text" name="mobilenumber" required autocomplete="off" minlength="10" maxlength="10"/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" required autocomplete="off" maxlength="32" minlength="8"/>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <input class="form-control btn btn-danger" type="submit" value="SignUp">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
<div class="gap-2"></div>

<!-- SCRIPTS -->
<script src="script/bootstrap.min.js"></script>
<script src="script/custom.js"></script>
<script src="script/jquery.min.js"></script>
</body>
</html>

