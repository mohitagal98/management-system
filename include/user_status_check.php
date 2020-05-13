<?php
/**
 * Created by PhpStorm.
 * User: Kuldeep Dhaka
 * Date: 29-May-19
 * Time: 5:06 PM
 * @param $id
 * @param $conn
 * @return int
 */

function block_check($id,$conn){
    $query = "SELECT blocked FROM users WHERE id='$id';";

    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    if ($row['blocked']==0){
        return 3;
    }
    else{
        return 4;
    }

}

function acc_approval_check($id,$conn){
    $query = "SELECT approval FROM users WHERE id='$id';";

    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    if ($row['approval']==0){
        return 5;
    }
    else{
        return 6;
    }
}