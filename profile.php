<?php
/**
 * Created by PhpStorm.
 * User: Kuldeep Dhaka
 * Date: 28-May-19
 * Time: 5:46 PM
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
if (block_check($_SESSION['user_id'],$conn)==4){
    header("Location:acc_blocked.php");
}
if (acc_approval_check($_SESSION['user_id'],$conn)==5){
    header("Location:acc_not_approved.php");
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
    <?php include 'include/user_profile_header.php';?>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <!-- NEWS FOR STUDENTS -->
                <div class="card-container">
                    <div class="card">
                        <div class="card-header bg-secondary">
                            <h5 class="card-title text-light text-center">Important News</h5>
                        </div>
                        <div class="card-body scrollable">
                            <?php
                                $query = "SELECT * FROM news ORDER BY id DESC ;";
                                $result = mysqli_query($conn,$query);
                                if(mysqli_num_rows($result)){
                                    echo '<ul>';
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo '<li>'.$row["body"].'</li>';
                                    }
                                    echo '</ul>';
                                }
                                else{
                                    echo '<div class="gap-200 text-center"><h4>No News Here!</h4></div>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <div class="gap-2"></div>
</body>
</html>
<?php if(isset($_GET['sign_out'])){
    session_destroy();
    header("Location:index.php");
}?>