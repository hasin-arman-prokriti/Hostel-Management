<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: http://localhost/hostel_management/index.php");
    exit;
}

?>

<?php 

	$res_id = $_SESSION['user_id'];

    $res_info_sql = "select room.room_no, rent, room_type,b_name from room left join resident on room.room_no=resident.room_no where room.room_no not in(select resident.room_no from resident)";
    $res_info = mysqli_query($connect, $res_info_sql);

    

 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Vacant Rooms Tables - SB Admin</title>
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
                        <h1 class="mt-4">Vacant Rooms</h1>
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                List of all the Vacant rooms
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Room Number</th>
                                            <th>Rent</th>
                                            <th>Room type</th>
                                            <th>Building</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Room Number</th>
                                            <th>Rent</th>
                                            <th>Room type</th>
                                            <th>Building</th>
                                        </tr>
                                    </tfoot>  
                                    <tbody>
                                    	<?php
			                                while ($res_info_row = mysqli_fetch_assoc($res_info)) {?>
			                                   
					                            <tr>
		                                            <td><?php echo $res_info_row["room_no"]; ?></td>
		                                            <td><?php echo $res_info_row["rent"]; ?></td>
		                                            <td><?php echo $res_info_row["room_type"]; ?></td>
		                                            <td><?php echo $res_info_row["b_name"] ?></td>
		                                        </tr>
			                                <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
