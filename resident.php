<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location: index.php");
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resident</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/resident.css" rel="stylesheet" />
</head>

<body>
    <style>
    body {
        background-image: url('https://images.pexels.com/photos/921294/pexels-photo-921294.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
    </style>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="resident.php"><?php echo $_SESSION['username'] ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="resident.php">Home</a>
                    </li>
                    <li class="nav-item"><a class="btn btn-primary btn-sm" href="logout.php">logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container">
        <div class="text-center mt-5">
            <h1>Hello - <?php echo $_SESSION['username'].' ' ?> !</h1>


        </div>
    </div>
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->

            <div class="row gx-lg-5">
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.2);">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-1">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i
                                    class="bi bi-collection"></i></div>
                            <h2 class="fs-4 fw-bold">Meal</h2>
                            <button type="button" class="btn btn-outline-dark"
                                onclick="location.href='res_meal.php'">Choose Meal</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.2);">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-1">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i
                                    class="bi bi-cloud-download"></i></div>
                            <h2 class="fs-4 fw-bold">Laundry</h2>
                            <button type="button" class="btn btn-outline-dark"
                                onclick="location.href='res_laundry.php'">Add Laundry</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.2);">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-1">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i
                                    class="bi bi-card-heading"></i></div>
                            <h2 class="fs-4 fw-bold">Payment</h2>
                            <button type="button" class="btn btn-outline-dark"
                                onclick="location.href='res_payment.php'">Make Payment</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.2);">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-1">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i
                                    class="bi bi-bootstrap"></i></div>
                            <h2 class="fs-4 fw-bold">Personal Info</h2>
                            <p button type="button" class="btn btn-outline-dark" onclick="location.href='res_info.php'">
                                See Info</button></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/resident.js"></script>
</body>

</html>