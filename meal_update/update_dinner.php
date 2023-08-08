<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: http://localhost/hostel_management/index.php");
    exit;
}

$res_id = $_SESSION['user_id'];
$meal_sql = "SELECT * FROM meal WHERE res_id='$res_id'";
$result = mysqli_query($connect, $meal_sql);
$meal_info = mysqli_fetch_array($result);


$dinner_update_sql = "update meal set dinner=dinner+1 where res_id='$res_id'";


if ($connect->query($dinner_update_sql) === TRUE) {
  header('location: meal_update_success.php');
} 

else {
  echo "Error updating record: " . $conn->error;
}

?>