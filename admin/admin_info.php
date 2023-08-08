<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: http://localhost/hostel_management/index.php");
    exit;
}
echo $_SESSION['username'];
?>

<?php 
    $e_id = $_SESSION['user_id'];

    $emp_info_sql = "SELECT * FROM `employee` where e_id ='$e_id'";
    $result = mysqli_query($connect, $emp_info_sql);
    $emp_details = mysqli_fetch_array($result);

    

    $emp_contact_sql = "select e_contact from employee left join emp_contacts on employee.e_id = emp_contacts.e_id where employee.e_id='$e_id'";
    $result = mysqli_query($connect, $emp_contact_sql);
    // $res_contact = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="C:/xampp/htdocs/hostel_management/assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include "navbar.php" ?>
        <div id="layoutSidenav">
            <?php include "sidebar.php" ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">About you</h1>
                                                

<div class="container bootstrap snippets bootdey my-5 py-5">   

    <div class="panel-body inf-content">
    <div class="row">
        <div class="col-md-4">
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="assets/fuad.png" data-original-title="Usuario"> 
        </div>
        <div class="col-md-6">
            <strong>Information</strong><br>
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Employee ID                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $emp_details['e_id'] ?>     
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                Name                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $emp_details['employee_name'] ?>     
                        </td>
                    </tr>
                    

                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                Job Title                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $emp_details['job_type'] ?> 
                        </td>
                    </tr>

                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                Building                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $emp_details['b_name'] ?> 
                        </td>
                    </tr>


                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                Start time                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $emp_details['start_time'] ?>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                End time                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $emp_details['end_time'] ?> 
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                Personal Contacts                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php
                                while ($emp_contact = mysqli_fetch_assoc($result)) {
                                    $contact = $emp_contact['e_contact'];
                                    echo $contact."<br>";
                                }

                             ?>
                        </td>
                    </tr>
                                                        
                </tbody>
            </table>
            </div>
        </div>
    </div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
