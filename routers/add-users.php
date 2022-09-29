<?php
include '../includes/connect.php';

function number($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }

    return $result;
}

$username = $_POST['username'];
$pass = $_POST['pass'];
$cust_name = $_POST['name'];

$cust_phone = $_POST['contact'];


$verified = $_POST['verified'];
$deleted = $_POST['deleted'];
$sql = "INSERT INTO users (username, pass, cust_name, cust_phone, verified, deleted) VALUES ('$username', '$password', '$name', '$contact', $verified, $deleted)";
if($con->query($sql)==true){
$user_id =  $con->insert_id;
$sql = "INSERT INTO wallet(customer_id) VALUES ($user_id)";
if($con->query($sql)==true){
	$wallet_id =  $con->insert_id;
	$cc_number = number(16);
	$cvv_number = number(3);
	$sql = "INSERT INTO wallet_details(wallet_id, number, cvv) VALUES ($wallet_id, $cc_number, $cvv_number)";
	$con->query($sql);
}	
}
header("location: ../users.php");
?>