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
    $meal_sql = "SELECT * FROM meal WHERE res_id='$res_id'";
    $result = mysqli_query($connect, $meal_sql);
    $meal_info = mysqli_fetch_array($result);

    $breakfast_update_sql = "update meal set breakfast=breakfast+1 where res_id='$res_id'";
    $lunch_update_sql = "update meal set lunch=lunch+1 where res_id='$res_id'";
    $dinner_update_sql = "update meal set dinner=dinner+1 where res_id='$res_id'";
    

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="css/resident.css" rel="stylesheet" />
    <title>Resident Meal</title>
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

    <!-- meal info -->
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.2);">
        <div class="container">
            <h2>Your current meal count</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width:10rem">
                        <p class="fs-2" style="text-align:center">Breakfast</p>
                        <p class="fs-3" style="text-align:center"><?php echo $meal_info['breakfast']; ?></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="width:10rem">
                        <p class="fs-2" style="text-align:center">Lunch</p>
                        <p class="fs-3" style="text-align:center"><?php echo $meal_info['lunch']; ?></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="width:10rem">
                        <p class="fs-2" style="text-align:center">Dinner</p>
                        <p class="fs-3" style="text-align:center"><?php echo $meal_info['dinner']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- meal update -->
    <div class="container">
        <h2>Please add your meals</h2>
        <div class="row">

            <!-- breakfast card -->
            <div class="col-md-4">

                <div class="card" style="width: 18rem;">
                    <img src="assets/breakfast.jpg" class="card-img-top" width="400" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Breakfast</h5>
                        <p>Please add your breakfast</p>
                        <form action="meal_update/update_breakfast.php">
                            <button class="button button1">
                                Add
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- lunch card -->
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/lunch.jpeg" class="card-img-top" width="400" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Lunch</h5>
                        <p>Please add your Lunch</p>
                        <form action="meal_update/update_lunch.php">
                            <button class="button button1">
                                Add
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- dinner card -->
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/dinner.jpg" class="card-img-top" width="400" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Dinner</h5>
                        <p>Please add your Dinner</p>
                        <form action="meal_update/update_dinner.php">
                            <button class="button button1">
                                Add
                            </button>
                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/resident.js"></script>
</body>

</html>