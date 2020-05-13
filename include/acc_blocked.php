<?php
/**
 * Created by PhpStorm.
 * User: Kuldeep Dhaka
 * Date: 29-May-19
 * Time: 5:17 PM
 */

include 'include/db_config.php';
include 'include/user_status_check.php';

session_start();

if (!isset($_SESSION['login_status'])){
    header("Location:index.php");
}
else if(isset($_SESSION['login_status'])){
    if ($_SESSION['login_status']==0){
        header("Location:index.php");
    }
}
if (block_check($_SESSION['user_id'],$conn)==3){
    header("Location:profile.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $_SESSION['full_name'];?></title>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="author" content="Kuldeep Dhaka & Sandeep Meena">
    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--link href="css/font-awesome.css" rel="stylesheet"-->
</head>
<body>
    <div class="container text-center">
        <div class="gap-2"></div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card-container">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h5 class="card-title text-light">Notice!</h5>
                        </div>
                        <div class="card-body">
                            <h4 class="text-danger">
                                Your Account has been blocked,<br>Please contact your College Admin to unblock it.
                            </h4>
                        </div>
                        <div class="card-footer bg-light">
                            <form method="get" action="acc_blocked.php">
                                <input type="submit" name="sign_out" value="Sign Out" class="form-control btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>
<?php if (isset($_GET['sign_out'])){
    session_destroy();
    header("Location:index.php");
}
