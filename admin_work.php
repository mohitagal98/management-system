<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Meena
 * Date: 28-May-19
 * Time: 7:37 PM
 */


include 'include/db_config.php';;

session_start();
if (!isset($_SESSION['admin_login_status'])){
    header("Location:admin_login.php");
}
else if(isset($_SESSION['admin_login_status'])){
    if ($_SESSION['admin_login_status']==0){
        header("Location:admin_login.php");
    }
}
?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title><?php echo $_SESSION['admin_name'];?></title>
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta name="author" content="Kuldeep Dhaka & Sandeep Meena">
        <!-- CSS FILES -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
    <?php include 'include/admin_profile_header.php';?>
    <div class="container">
        <div class="card">
            <div class="card-header bg-secondary">
                <div class="card-title text-light text-center">
                    <h5>STUDENTS</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="search-box">

                </div>
                <?php
                    $query = "SELECT * FROM users;";
                    $result = mysqli_query($conn,$query);
                    if (mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                            echo '<div class="container text-right"><h6 class="text-left"><a href="student_data.php?id='.$row["id"].'" class="btn btn-primary float-right">Show Profile</a>Name: '.$row["fullname"].'<br> Email: '.$row["email"].'<!--<div class="gap"></div>--> </h6></div>';
                        }
                    }else{
                        echo '<div class="text-center"><h4>No Students Registered</h4></div>';
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="gap-2"></div>
    </body>
    </html>
<?php if(isset($_GET['sign_out'])){
    session_destroy();
    header("Location:admin_login.php");
}?>