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

    $res_info_sql = "SELECT * FROM `resident` LEFT JOIN payment ON resident.res_id = payment.res_id";
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
        <title>Resident Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include "navbar.php" ?>
        <div id="layoutSidenav">
           <?php include "sidebar.php" ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container mt-4">
                        <div class="card bg-primary text-white font-size: 55px !important mb-1">
                            <div class="card-body">Update Payment table</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="update_payment.php"> </a>
                                

                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                    </div>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Resident Payments</h1>
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                List of all the residents
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Payment ID</th>
                                            <th>Resident Name</th>
                                            
                                            <th> Total Payable Amount</th>
                                            <th>Payment Status</th>
                                            <th>Last Paid</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Payment ID</th>
                                            <th>Resident Name</th>
                                            
                                            <th> Total Payable Amount</th>
                                            <th>Payment Status</th>
                                            <th>Last Paid</th>
                                        </tr>
                                    </tfoot>  
                                    <tbody>
                                    	<?php
			                                while ($res_info_row = mysqli_fetch_assoc($res_info)) {?>
			                                   
					                            <tr>
		                                            <td><?php echo $res_info_row["p_id"]; ?></td>
		                                            <td><?php echo $res_info_row["res_name"]; ?></td>
		                                            <td><?php echo $res_info_row["amount"]; ?></td>
		                                            <td><?php echo $res_info_row["payment_status"] ?></td>
		                                            <td><?php echo $res_info_row["date"] ?></td>
                                                    
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
