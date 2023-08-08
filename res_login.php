<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $user_id = $_POST["user_id"];
    $password = $_POST["password"]; 
    
    
    $sql = "Select * from resident where res_id ='$user_id' AND password = '$password' ";
    $result = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $row = mysqli_fetch_array($result);
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $row['res_id'];
        $_SESSION['username'] = $row['res_name'];




        header("location: resident.php");
            } 
    else{
        $showError = "Invalid Credentials";
        }
}        
    
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Resident Login</title>
</head>

<div class="p-5 text-center bg-image" style="
      background-image: url('https://scontent.fdac15-1.fna.fbcdn.net/v/t39.30808-6/241041212_1242373816185853_2896899777729482362_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeH77cXtoMMXhTXRttrm-QhnkoT2QvaUr0WShPZC9pSvRXXow8KggAbgxPsKq0D7X74UoZo8cONav5SvVTWw_UpY&_nc_ohc=XO6R4ZXSK20AX8emyGG&tn=jrhta4jZCBWZbpXW&_nc_ht=scontent.fdac15-1.fna&oh=00_AfAf2UtXO0uX6LW6bS3enPZiva6MLjfg-BX9vZaX1CgCtQ&oe=6396C0A7');
      height: 200px;
    ">

</div>
<!-- Background image -->



<body>

    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4">
        <h1 class="text-center">Resident Login</h1>
        <form action="/hostel_management/res_login.php" method="post">
            <div class="form-group">
                <label for="user_id">Resident ID</label>
                <input type="text" class="form-control" id="user_id" name="user_id" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>


            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>