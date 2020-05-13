<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Meena
 * Date: 27-May-19
 * Time: 2:21 PM
 */

include 'include/codes.php';

session_start();
if (isset($_SESSION['admin_login_status'])){
    if ($_SESSION['admin_login_status']==1)
        header("Location:admin_work.php");}
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
    <!--link href="css/font-awesome.css" rel="stylesheet"-->
</head>
<body>
<?php include "include/header.php";?>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="card-container">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h5 class="card-title text-light">ADMIN LOGIN FORM</h5>
                    </div>
                    <form method="post" action="admin_login_process.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Enter ID</label>
                                <input class="form-control" type="email" name="admin_email" required autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="admin_password" required autocomplete="off" />
                            </div>
                            <?php if(isset($_GET['code'])){
                               echo get_code_data($_GET['code']);
                            }?>
                        </div>
                        <div class="card-footer bg-light">
                            <input class="form-control btn btn-dark" type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

<!-- SCRIPTS -->
<script src="script/bootstrap.min.js"></script>
<script src="script/custom.js"></script>
<script src="script/jquery.min.js"></script>
</body>
</html>

