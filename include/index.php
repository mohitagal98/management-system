<?php
/**
 * Created by PhpStorm.
 * User: Kuldeep Dhaka
 * Date: 18-Oct-19
 * Time: 12:19 AM
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
    <meta name="description" content="Student Corner for Maharaja College">
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
            <div class="card-container">
                <div class="card">
                    <div class="card-header bg-info">
                        <h5 class="card-title text-light">INSTITUTE LOGIN</h5>
                    </div>
                    <form method="post" action="user_login_process.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Email or DISC code</label>
                                <input class="form-control" type="email" name="email" required autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" required autocomplete="off" maxlength="32" minlength="8"/>
                            </div>
                            <?php if(isset($_GET['code'])){
                               if ($_GET['code'] == 0) {
                                   echo '<div class="alert-danger text-center" >Authentication Failed!</div >';
                                }
                                elseif ($_GET['code']==2){
                                    echo '<div class="alert-primary text-center" >Registered Successfully</div >';
                                }
                            }?>
                        </div>
                        <div class="card-footer bg-light">
                            <input class="form-control btn btn-info" type="submit" value="Login">
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

