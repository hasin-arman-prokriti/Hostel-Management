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

    $res_info_sql = "SELECT * FROM `resident` where res_id ='$res_id'";
    $result = mysqli_query($connect, $res_info_sql);
    $res_details = mysqli_fetch_array($result);

    $res_building_sql = "select  b_name from resident inner join room on room.room_no=resident.room_no where res_id='$res_id'";
    $result = mysqli_query($connect, $res_building_sql);
    $res_building = mysqli_fetch_array($result);

    $res_contact_sql = "select res_contact from resident left join res_contacts on resident.res_id = res_contacts.res_id where resident.res_id='$res_id'";
    $result = mysqli_query($connect, $res_contact_sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="css/resident.css" rel="stylesheet" />
    <title>Resident info</title>
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


    <div class="container bootstrap snippets bootdey my-5 py-5">
        <div class="panel-body inf-content">
            <div class="row">
                <div class="col-md-4">
                    <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip"
                        src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario">
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
                                            Resident ID
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $res_details['res_id'] ?>
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
                                        <?php echo $res_details['res_name'] ?>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-bookmark text-primary"></span>
                                            Room Number
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $res_details['room_no'] ?>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-eye-open text-primary"></span>
                                            Building Name
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $res_building['b_name'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-envelope text-primary"></span>
                                            Present Address
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $res_details['present_address'] ?>
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
                                while ($res_contact = mysqli_fetch_assoc($result)) {
                                    $contact = $res_contact['res_contact'];
                                    echo $contact."<br>";
                                }




                             ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="glyphicon glyphicon-calendar text-primary"></span>
                                            Emergency Contacts
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $res_details['emergency_contact'] ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>