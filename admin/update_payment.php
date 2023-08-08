<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: http://localhost/hostel_management/index.php");
    exit;
}

$resident_sql = "select * from";
$room_check_sql = "select res_name, res_id,room.room_no, room_type from resident left join room on resident.room_no=room.room_no where room_type='PREMIUM'";

$update_payment_sql = "update ((((payment p inner join resident r on p.res_id=r.res_id) inner join room o on o.room_no=r.room_no) inner join laundry l on p.res_id=l.res_id) inner join meal m on p.res_id=m.res_id)  set p.amount=rent+no_of_item*10+breakfast*30+lunch*50+dinner*50";

$discount_payment_sql = "update ((((payment p inner join resident r on p.res_id=r.res_id) inner join room o on o.room_no=r.room_no) inner join laundry l on p.res_id=l.res_id) inner join meal m on p.res_id=m.res_id)  set p.amount=(rent+no_of_item*10+breakfast*30+lunch*50+dinner*50)*0.95";

$update_meal_sql = "Update meal set breakfast=0, lunch=0, dinner=0";
$update_laundry_sql = "Update laundry set no_of_item=0";
$update_status_sql = "update payment set payment_status='unpaid'";



if ($connect->query($update_payment_sql) === TRUE) {
  mysqli_query($connect, $update_meal_sql);
  mysqli_query($connect, $update_laundry_sql);
  mysqli_query($connect, $update_status_sql);

  header('location: payment_update_success.php');
} 

else {
  echo "Error updating record: ";
}

?>
