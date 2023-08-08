<?php
@include "config.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}

?>
<?php 
    
    $res_id = $_SESSION['user_id'];
    $payment_sql = "SELECT * FROM payment WHERE res_id='$res_id'";
    $result1 = mysqli_query($connect, $payment_sql);
    $payment_info = mysqli_fetch_array($result1);

   





 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="css/resident.css" rel="stylesheet" />
    <title>Resident Payment</title>
    <style>
    .button {
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .button1 {
        background-color: #4CAF50;
    }

    /* Green */
    .button2 {
        background-color: #008CBA;
    }

    /* Blue */
    </style>
</head>

<body>
    <style>
    body {
        background-image: url('assets/background.jpg');
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

    <!-- payment info -->
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.2);">
        <div class="container">
            <h2>Your Current Payment</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width:10rem">
                        <p class="fs-3" style="text-align:center"><?php echo $payment_info['amount']; ?></p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    <!-- Status update -->
    <div class="container">
        <h2>Please Make your Payment</h2>
        <div class="row">

            <!-- laundry card -->
            <div class="col-md-4">

                <div class="card" style="width: 18rem;">
                    <img src="assets/payment.jpeg" class="card-img-top" width="400" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Payment</h5>
                        <p>Please make your payment</p>
                        <form action="payment_update/resident_make_payment.php">
                            <button class="button button1">
                                Pay
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/resident.js"></script>
</body>

</html>