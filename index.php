<?php
@include "config.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Welcome to Nestor Living</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<div class="p-5 text-center bg-image" style="
      background-image: url('https://img.freepik.com/premium-photo/residential-modern-apartment-building_99097-61.jpg?w=900');
      height: 600px;
    ">

    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!">Nestor Living</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="btn btn-info ml-2 mx-2" href="res_login.php">Resident Login</a>
                        </li>
                        <li class="nav-item"><a class="btn btn-success" href="admin_login.php">Admin Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">A warm welcome!</h1>
                        <p align="justify" ,Class="fs-5">Nestor Living is Bangladesh's first tech-enabled &
                            community-centric bachelor housing company launched in Dhaka and now growing rapidly in
                            Rampura and Badda Areas. We provide a hassle-free and community-driven living experience to
                            bachelor students & professionals in Bangladesh. From a humble beginning at Rampura in
                            January 2019 with 5 beds in a small apartment, we have grown to 140 beds as of the date and
                            aim to serve over 10,000 Customers across Bangladesh over the next 3 years. Currently, we
                            have a Fully Equipped Co-living Development in South Badda - serving 120+ bachelors from
                            August 2020. For your convenience, the site is located very close to Gulshan CBD, EWU, BRAC
                            University, Canadian University Bangladesh & Progoti Sarani. As promised, life is amazing
                            inside Nestor & equally vibrant outside our premises.</p>
                        <a class="btn btn-primary btn-lg" href="#!">Call Now +8801905411800</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-5">

                                <h2 class="fs-4 fw-bold">Room Types</h2>
                                <p class="mb-0">Nestor gives you two choices for rooms:
                                    <li>Standard</li>
                                    <li>Premium</li>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-5">

                                <h2 class="fs-4 fw-bold">Meal Facilities</h2>
                                <p align="justify" , class="mb-0">Nestor offers you a wide range food options from where
                                    you can make your food plan for a week which will be maintained accordingly. Also
                                    our satff member will make sure the food is at your doorstep. We gaurantee our food
                                    hygeine and also 100% halal food is served. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-5">

                                <h2 class="fs-4 fw-bold">Weekly Housekeeping</h2>
                                <p align="justify" , class="mb-0">Once in a every week our staff member will clean your
                                    room eg. changing bedsheet, cleaning ceiling fan, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-5">

                                <h2 class="fs-4 fw-bold">In-house Laundry</h2>
                                <p class="mb-0">We have in-house laundry facilities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-5">

                                <h2 class="fs-4 fw-bold">CCTV Survelliance</h2>
                                <p class="mb-0">Nestor is fully under CCTV survilliance 24/7 and we have guards so our
                                    residents do not have to be worried about security.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-5">

                                <h2 class="fs-4 fw-bold">Power Backup</h2>
                                <p class="mb-0">Nestor provides 24/7 power backup in case of load shedding.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy;2022 Nestor, Dhaka</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


    </body>

</html>