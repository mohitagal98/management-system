<?php
/**
 * Created by PhpStorm.
 * User: Kuldeep Dhaka
 * Date: 30-May-19
 * Time: 3:08 AM
 * @param $id
 * @param $conn
 */

function block($id,$conn){
    $query = "UPDATE users SET blocked='1' WHERE id='$id';";
    mysqli_query($conn,$query);
}

function unblock($id,$conn){
    $query = "UPDATE users SET blocked='0' WHERE id='$id';";
    mysqli_query($conn,$query);
}

function approve_acc($id,$conn){
    $query = "UPDATE users SET approval='1' WHERE id='$id';";
    mysqli_query($conn,$query);
}