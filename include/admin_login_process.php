<?php
/**
 * Created by PhpStorm.
 * User: Kuldeep Dhaka
 * Date: 28-May-19
 * Time: 6:09 PM
 */

include 'include/db_config.php';

session_start();

$email = $_POST['admin_email'];
$password = $_POST['admin_password'];
$admin_id = "";
$query = "SELECT * FROM admins WHERE email='$email' AND pass='$password'";

date_default_timezone_set('Asia/Kolkata');
$date = date('Y/m/d h:i:sa');

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $_SESSION['admin_id'] = $row['id'];
        $admin_id = $row['id'];
        $_SESSION['admin_name'] = $row['full_name'];
        $_SESSION['admin_email'] = $row['email'];
        $_SESSION['admin_login_status'] = 1;
    }
    $query = "UPDATE admins SET last_login='$date' WHERE id='$admin_id'";


    ;
    mysqli_query($conn, $query);
    header("Location:admin_work.php?c=5");
}
else{
    header("Location:admin_login.php?code=0");
}
