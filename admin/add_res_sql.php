<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: http://localhost/hostel_management/index.php");
    exit;
}

$res_id = $_POST['res_id'];
$m_id = $_POST['m_id'];
$l_id = $_POST['l_id'];
$p_id = $_POST['p_id'];
$res_name = $_POST['res_name'];
$password = $_POST['password'];
$personal_contact = $_POST['personal_contact'];
$em_contact = $_POST['em_contact'];
$nid_no = $_POST['nid_no'];
$address = $_POST['address'];
$room_no = $_POST['room_no'];


$resident_sql = "INSERT INTO `resident` (`res_id`, `NID`, `res_name`, `present_address`, `emergency_contact`, `password`, `room_no`) VALUES ('$res_id', '$nid_no', '$res_name', '$address', '$em_contact', '$password', '$room_no')";

$res_contact_sql = "INSERT INTO `res_contacts` (`res_id`, `res_contact`) VALUES ('$res_id', '$personal_contact')";

$laundry_sql = "INSERT INTO `laundry` (`l_id`, `no_of_item`, `res_id`) VALUES ('$l_id', '0', '$res_id')";

$meal_sql = "INSERT INTO `meal` (`m_id`, `breakfast`, `lunch`, `dinner`, `res_id`) VALUES ('$m_id', '0', '0', '0', '$res_id')";

$payment_sql = "INSERT INTO `payment` (`p_id`, `amount`, `payment_status`, `date`, `res_id`) VALUES ('$p_id', '0', 'unpaid', NULL, '$res_id')";

mysqli_query($connect, $resident_sql);
mysqli_query($connect, $res_contact_sql);
mysqli_query($connect, $laundry_sql);
mysqli_query($connect, $meal_sql);
mysqli_query($connect, $payment_sql);
header("location: add_success.php");


?>