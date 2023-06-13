<?php
include_once 'admin/include/class.user.php';
$user = new User();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>srinithDineshKarthikPHP</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <style>
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: auto;
        }

        body {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        h4 {
            color: #ffbb2b;
        }

        h6 {
            color: navajowhite;
            font-family: monospace;
        }
    </style>


</head>

<body>
    <div class="container">


        <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="review.php">Bookings</a></li>
                    <li><a href="local_attractions.php">Local Attractions</a></li>
                    <li><a href="hotel_dining.php">Hotel Dining</a></li>
                    <li><a href="spa_saloon.php">Spa & Saloon</a></li>
                    <li><a href="ratings.php">Reviews 😱🫣</a></li>
                </ul>

            </div>
        </nav>



        <?php

        $sql = "SELECT * FROM room_category";
        $result = mysqli_query($user->db, $sql);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $room_pic=1;
                while ($row = mysqli_fetch_array($result)) {

                    echo "
                            <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-9 well'>
                                <h4>" . $row['roomname'] . "</h4><hr>
                                <img src='images/rooms/".$room_pic.".jpg' width='800' height='400' style='border: 1px solid black; margin: 10px;'/>
                                <h6>No of Beds: " . $row['no_bed'] . " " . $row['bedtype'] . " bed.</h6>
                                <h6>Facilities: " . $row['facility'] . "</h6>
                                <h6>Price: " . $row['price'] . " $/night.</h6>
                            </div>

                            </div>

                         ";  

                    $room_pic++;
                }
            } else {
                echo "NO Data Exist";
            }
        } else {
            echo "Cannot connect to server" . $result;
        }
        ?>


    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>