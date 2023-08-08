<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: http://localhost/hostel_management/index.php");
    exit;
}

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $delete = mysqli_query($connect,"DELETE FROM `resident` WHERE `res_id`='$id'");
}

?>

<?php

	$res_id = $_SESSION['user_id'];

    $res_info_sql = "SELECT * FROM `resident` LEFT JOIN room ON resident.room_no = room.room_no";
    $res_info = mysqli_query($connect, $res_info_sql);
    $e_id = $_SESSION['user_id'];

    $emp_info_sql = "SELECT * FROM employee";
    $emp_info = mysqli_query($connect, $emp_info_sql);
    

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resident Tables - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include "navbar.php" ?>
    <div id="layoutSidenav">
        <?php include "sidebar.php" ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Choose which row to delete</h1>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            List of all the residents
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Resident ID</th>
                                        <th>Resident Name</th>
                                        <th>Room Number</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Resident ID</th>
                                        <th>Resident Name</th>
                                        <th>Room Number</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
			                                while ($res_info_row = mysqli_fetch_assoc($res_info)) {
                                                echo "
                                                <tr>
                                                    <td>". $res_info_row['res_id']."</td>
                                                    <td>". $res_info_row['res_name']."</td>
                                                    <td>". $res_info_row['room_no']."</td>
                                                    <td><button class='btn btn-danger'><a href='delete_res.php?id=". $res_info_row['res_id']."' class='text-light'>Delete</a></button></td>
                                                </tr>
                                                ";}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>