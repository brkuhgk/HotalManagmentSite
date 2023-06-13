<?php
include_once 'admin/include/class.user.php';
$user = new User();

$roomname = $_GET['roomname'];
$result = $_GET['result'];
$confirmation_id = $_GET['confirmation_id'];
$checkin = $_GET['checkin'];
$checkout = $_GET['checkout'];
$name = $_GET['name'];
$email = $_GET['email'];
$price = $_GET['price'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$city = $_GET['city'];
$state = $_GET['state'];
$roomcount = $_GET['roomcount'];
$adults = $_GET['adults'];
$children = $_GET['children'];
$effprice = $_GET['effprice'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>srinithDineshKarthikPHP</title>
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

        .wellfix {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 163px;
        }

        h4 {
            color: #ffbb2b;
            font-size: 35px;
        }

        h6 {
            color: navajowhite;
            font-family: monospace;
        }

        .wid {
            padding-bottom: 31px;
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
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>
                </ul>
            </div>
        </nav>

        <?php
        if (strpos($result, 'booked') !== false && !$effprice) {
            echo "
            <div class='row'>
            <div class='col-md-4'></div>
            <div class='col-md-5 well'>
                <h4> Your booking has been confirmed. Thank you for choosing our service. </h4><hr>
                <h6>Booking Details</h6>
                <h6>Confirmation ID: " . $confirmation_id . "</h6>
                <h6>Check In: " . $checkin . "</h6>
                <h6>Check Out: " . $checkout . "</h6>
                <h6>Room Type: " . $roomname . "</h6>
                <h6> Total Price: " . $price . "</h6>
                <h6>No of Rooms: " . $roomcount . "</h6>
                <h6>No of Adults: " . $adults . "</h6>
                <h6>No of Children: " . $children . "</h6>
                <h6>Guest Name: " . $name . "</h6>
                <h6>Guest Email: " . $email . "</h6>
                <h6>Guest Phone: " . $phone . "</h6>
                <h6>Guest Address: " . $address . "</h6>
                <h6>Guest City: " . $city . "</h6>
                <h6>Guest State: " . $state . "</h6>
            </div>
            </div>                   
         ";
        }
        else if (strpos($result, 'booked') !== false && $effprice){

            echo "
            <div class='row'>
            <div class='col-md-4'></div>
            <div class='col-md-5 well'>
                <h4> Your booking has been confirmed. Thank you for choosing our service. </h4><hr>
                <h6>Booking Details</h6>
                <h6>Confirmation ID: " . $confirmation_id . "</h6>
                <h6>Check In: " . $checkin . "</h6>
                <h6>Check Out: " . $checkout . "</h6>
                <h6>Room Type: " . $roomname . "</h6>
                <h6> Total Price: " . $price . "</h6>
                <h6><b> ∆∆ You got a discount of 100$ 🥳🥳🥳</b></h6>
                <h6>No of Rooms: " . $roomcount . "</h6>
                <h6>No of Adults: " . $adults . "</h6>
                <h6>No of Children: " . $children . "</h6>
                <h6>Guest Name: " . $name . "</h6>
                <h6>Guest Email: " . $email . "</h6>
                <h6>Guest Phone: " . $phone . "</h6>
                <h6>Guest Address: " . $address . "</h6>
                <h6>Guest City: " . $city . "</h6>
                <h6>Guest State: " . $state . "</h6>
            </div>
            </div>                   
         ";

        } else {
            echo "
            <div class='row'>
            <div class='col-md-4'></div>
            <div class='col-md-5 well'>
                <h4> Booking Failed </h4><hr>
                <h6>Sorry, there was an error processing your booking. Please try again later.</h6>
            </div>
            </div>                   
         ";
        }

        ?>
        <div class="text-center wid">
            <a class="btn btn-lg btn-primary button" href="index.php">Back to Home</a>
        </div>


    </div>


    <script src="my_js/slide.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>