<?php
include_once 'admin/include/class.user.php';
$user = new User();

$reviews = "SELECT review_text FROM reviews";
$reviews_result = mysqli_query($user->db, $reviews);

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $sql = "INSERT INTO reviews (review_text) VALUES ('$review');";
    $result = mysqli_query($user->db, $sql) or die(mysqli_connect_errno() . "Data cannot inserted");
    $reviews_result = mysqli_query($user->db, $reviews);
    $_REQUEST['submit'] = null;
}

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
    <!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->
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
            margin-left: 228px;
            color: #ffbb2b;
        }

        ul {
            color: white;
            font-size: 13px;
        }

        h6 {
            color: navajowhite;
            font-family: monospace;
        }

        li {
            color: white;
            font-size: 13px;
        }
        .wid{
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
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="review.php">Bookings</a></li>
                    <li><a href="local_attractions.php">Local Attractions</a></li>
                    <li><a href="hotel_dining.php">Hotel Dining</a></li>
                    <li><a href="spa_saloon.php">Spa & Saloon</a></li>
                    <li class="active"><a href="ratings.php">Reviews 😱🫣</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>
                </ul>
            </div>
        </nav>

        <!-- This website will take reviews from customers -->
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>REVIEWS</h4>
                <hr>
            </div>
            <div class="col-md-3"></div>
        </div>

        <?php

        while ($row_rev = mysqli_fetch_array($reviews_result)) {
            echo "<div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-6 well'>
                    <ul>
                        <li><b>" . $row_rev['review_text'] . "</b></li>
                    </ul>
                </div>
                <div class='col-md-3'></div>
            </div>";
        }

        ?>

        <Form action="" method="Post" name="booking_reviews">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 well">
                    <ul>
                        <div class="form-group">
                            <label for="review">Post Your Review:</label>
                            <textarea type="text" class="form-control" name="review" placeholder="" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary button" name="submit">Post</button>
                    </ul>
                </div>
                <div class="col-md-3"></div>
            </div>
        </Form>

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