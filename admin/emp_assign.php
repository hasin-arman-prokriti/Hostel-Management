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
if (isset($_POST['jobtype'])) {
        $job_type=$_POST['jobtype'];
        $time= $_POST['time'];
        $emp_info_sql = "select distinct e_id, employee_name, job_type, start_time, end_time,room.b_name from (employee right join room on room.b_name=employee.b_name) where job_type='$job_type' and start_time<='$time' and end_time>='$time'";
        $emp_info = mysqli_query($connect, $emp_info_sql);
// }
// else{
//     $job_type= 'Cleaner';
//     $time='07:00:00';
} 
  

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Employee Assign - SB Admin</title>
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
                    <h1 class="mt-4">Send a cleaner to a room at the given time:</h1>
                    <div class="card my-5">

                        <form action="get_emp_data.php" method="post">
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Input the time here:</label>
                                <input type="time" class="form-control" name="time"><br>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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