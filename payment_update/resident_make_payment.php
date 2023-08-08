<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: http://localhost/hostel_management/index.php");
    exit;
}

$res_id = $_SESSION['user_id'];
$payment_sql = "SELECT * FROM payment WHERE res_id='$res_id'";
$result = mysqli_query($connect, $payment_sql);
$payment_info = mysqli_fetch_array($result);
$date = date('Y-m-d');
$update_payment_sql = "update payment set payment_status='paid', amount=0,date='$date' where res_id='$res_id'";



if ($connect->query($update_payment_sql) === TRUE) {


  header('location: payment_update_success.php');
} 

else {
  echo "Error updating record: " . $conn->error;
}

?>