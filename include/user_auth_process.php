<?php
/**
 * Created by PhpStorm.
 * User: Kuldeep Dhaka
 * Date: 28-May-19
 * Time: 7:42 PM
 * @param $email
 * @param $password
 */

session_start();

function user_login($email, $password, $conn){
    $query = "SELECT * FROM users WHERE email='$email' AND pass='$password'";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['full_name'] = $row['fullname'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['mobile_number'] = $row['mobilenumber'];
      $_SESSION['login_status'] = 1;
    }
        return 1;
    }
else{
        return 0;
    }
}

function signup($fullname, $email,$mobilenumber, $pass, $conn){
    $query = "INSERT INTO users(fullname,email,mobilenumber,pass) VALUES ('$fullname','$email','$mobilenumber','$pass')";

    if(mysqli_query($conn,$query)){
        return 2;
    }
    else{
        return 1;
    }

}