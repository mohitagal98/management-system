<?php
/**
 * Created by PhpStorm.
 * User: Kuldeep Dhaka
 * Date: 28-May-19
 * Time: 3:39 PM
 */

define("host","database");
define("user","root");
define("password","abc@123");
define("database","database1");
define("port","3306");

$conn = mysqli_connect(host,user,password,database,port);

function formatedate($date)
{
    return date('h:i A',strtotime($date));
}

