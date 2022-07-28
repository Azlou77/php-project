<?php ob_start();
$db['db_host']= "109.234.160.109";
$db['db_user'] = "dsxt8520";
$db['db_pass'] = "7PmN-uLmH-aDF#";
$db['db_name'] = "dsxt8520_cms";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);



$query = "SET NAMES utf8";
mysqli_query($connection,$query);

//if($connection) {
//
//echo "We are connected";
//
//}


