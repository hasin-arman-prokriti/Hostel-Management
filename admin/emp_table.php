<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: http://localhost/hostel_management/index.php");
    exit;
}

?>

<?php 

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
    <title>Employee Tables - SB Admin</title>
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
                    <h1 class="mt-4">Employees</h1>


                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            List of all the employees
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>Job Type</th>
                                        <th>Working Building</th>
                                        <th>Contacts</th>
                                        <th>Shift Start</th>
                                        <th>Shift End</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>Job Type</th>
                                        <th>Working Building</th>
                                        <th>Contacts</th>
                                        <th>Shift Start</th>
                                        <th>Shift End</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
			                                while ($emp_info_row = mysqli_fetch_assoc($emp_info)) {
                                                $id = $emp_info_row["e_id"];

                                                ?>

                                    <tr>
                                        <td><?php echo $emp_info_row["e_id"]; ?></td>
                                        <td><?php echo $emp_info_row["employee_name"]; ?></td>
                                        <td><?php echo $emp_info_row["job_type"]; ?></td>
                                        <td><?php echo $emp_info_row["b_name"] ?></td>
                                        <td>
                                            <?php
                                                        $emp_contact_sql = "select e_contact from employee left join emp_contacts on employee.e_id = emp_contacts.e_id where employee.e_id='$id'";

                                                        $result = mysqli_query($connect, $emp_contact_sql);
                                                            while ($emp_contact = mysqli_fetch_assoc($result)) {
                                                                $contact = $emp_contact['e_contact'];
                                                                echo $contact."<br>";
                                                            }
                                                         ?>
                                        </td>
                                        <td><?php echo $emp_info_row["start_time"]; ?></td>
                                        <td><?php echo $emp_info_row["end_time"]; ?></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>