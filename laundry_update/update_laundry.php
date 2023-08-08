<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: http://localhost/hostel_management/index.php");
    exit;
}

$res_id = $_SESSION['user_id'];
$l_sql = "SELECT * FROM laundry WHERE res_id='$res_id'";
$result = mysqli_query($connect, $l_sql);
$l_info = mysqli_fetch_array($result);

$l_update_sql = "update laundry set no_of_item=no_of_item+1 where res_id='$res_id'";


if ($connect->query($l_update_sql) === TRUE) {
  header('location: laundry_update_success.php');
} 

else {
  echo "Error updating record: " . $conn->error;
}

?>