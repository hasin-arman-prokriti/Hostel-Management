<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: http://localhost/hostel_management/index.php");
    exit;
}

$e_id = $_POST['e_id'];
$employee_name = $_POST['employee_name'];
$password = $_POST['password'];
$e_contact = $_POST['e_contact'];
$job_type = $_POST['job_type'];
$b_name = $_POST['b_name'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];


$emp_sql = "INSERT INTO `employee` (`e_id`, `password`, `employee_name`, `job_type`, `start_time`, `end_time`, `b_name`) VALUES ('$e_id', '$password', '$employee_name', '$job_type', '$start_time', '$end_time', '$b_name')";

$emp_contact_sql = "INSERT INTO `emp_contacts` (`e_id`, `e_contact`) VALUES ('$e_id', '$e_contact')";

mysqli_query($connect, $emp_sql);
mysqli_query($connect, $emp_contact_sql);

header("location: add_success.php");


?>