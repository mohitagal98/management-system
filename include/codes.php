<?php
/**
 * Created by PhpStorm.
 * User: Kuldeep Dhaka
 * Date: 29-May-19
 * Time: 12:48 PM
 * @param $code
 * @return string
 */

function get_code_data($code){
    switch ($code){
        case 0:
            return '<div class="alert-danger text-center" >Authentication Failed!</div >';
            break;
        case 1:
            return '<div class="alert-danger text-center" >SignUp Process Failed!</div >';
            break;
        case 2:
            return '<div class="alert-primary text-center" >Registered Successfully</div >';
            break;
        default :
            return '<div class="alert-danger text-center" >Error Occurred!</div >';
    }
}

