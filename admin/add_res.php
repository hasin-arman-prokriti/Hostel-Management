<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: http://localhost/hostel_management/index.php");
    exit;
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
    <title>Add new resident - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-info">
    <?php include "navbar.php" ?>

    <div id="layoutSidenav">
        <?php include "sidebar.php" ?>
        <div id="layoutSidenav_content">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header">
                                            <h3 class="text-center font-weight-light my-4">Add new resident's
                                                information</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="add_res_sql.php" method="POST">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" name="res_id" type="text"
                                                                placeholder="Enter your first name" />
                                                            <label for="inputFirstName">Resident ID</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input class="form-control" name="m_id" type="text"
                                                                placeholder="Enter your last name" />
                                                            <label for="inputLastName">Meal ID</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input class="form-control" name="l_id" type="text"
                                                                placeholder="Enter your last name" />
                                                            <label for="inputLastName">Laundry ID</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input class="form-control" name="p_id" type="text"
                                                                placeholder="Enter your last name" />
                                                            <label for="inputLastName">Payment ID</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input class="form-control" name="res_name" type="text"
                                                                placeholder="name@example.com" />
                                                            <label for="inputEmail">Full Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <!-- <div class="form-floating mb-3"> here mb-3 adds space below the box -->
                                                        <div class="form-floating">
                                                            <input class="form-control" name="password" type="text"
                                                                placeholder="Create a password" />
                                                            <label for="inputPassword">Password</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input class="form-control" name="personal_contact"
                                                                type="text" placeholder="Enter your last name" />
                                                            <label for="inputLastName">Personal contact</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input class="form-control" name="em_contact" type="text"
                                                                placeholder="Enter your last name" />
                                                            <label for="inputLastName">Emergency Contact</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" name="nid_no" type="text"
                                                        placeholder="name@example.com" />
                                                    <label for="inputEmail">NID Number</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" name="address" type="text"
                                                        placeholder="name@example.com" />
                                                    <label for="inputEmail">Address</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" name="room_no" type="text"
                                                        placeholder="name@example.com" />
                                                    <label for="inputEmail">Room Number</label>
                                                </div>
                                                <div class="mt-4 mb-0">
                                                    <div class="d-grid"><button type="submit"
                                                            name="submit">Submit</button></div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <div id="layoutAuthentication_footer">
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Nestor Living 2022</div>
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>