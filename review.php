<?php
include_once 'admin/include/class.user.php';
$user = new User();

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $sql = "SELECT * FROM ROOMS WHERE CONF_ID='$c_phone'";
    $query = mysqli_query($user->db, $sql);
    $row = mysqli_fetch_array($query);
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

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <style>
        .well {
            background: rgba(0, 0, 0, 0.5);
            border: none;
        }

        body {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        h4 {
            margin-left: 30px;
            color: #ffbb2b;
        }

        h6 {
            color: navajowhite;
            font-family: monospace;
        }

        ul {
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
                    <li class="active"><a href="review.php">Bookings</a></li>
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
        if (!isset($_REQUEST['submit'])) {
            echo '
            <Form action="" method="Get" name="booking_status">
            <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 well">
            <h4>Booking Status</h4>
            <hr>
            <ul>
            <div class="form-group">
             <label for="l_name">Enter Your Name:</label>
             <input type="text" class="form-control" name="l_name" placeholder="XXXXXXX" required>
             </div>
            <div class="form-group">
           <label for="c_phone">Enter Your Confirmation Number:</label>
              <input type="text" class="form-control" name="c_phone" placeholder="XXXX" required>
             </div>
             <button type="submit" class="btn btn-lg btn-primary button" name="submit">check</button>
             </ul>
            </div>
            <div class="col-md-3"></div>
            </div>
            </Form>
       ';
        }
        ?>

        <?php

        if (isset($_REQUEST['submit'])) {

            if (mysqli_num_rows($query) > 0) {

                echo "
            <div class='row'>
         <div class='col-md-3'></div>
         <div class='col-md-6 well'>
            <h4>Hello " . $row['name'] . "!</h4>
            <h4>Welcome Back</h4>
            <hr>
            <ul>
            <div class='form-group'>
            <h6>Booking Details</h6>
            <h6>Confirmation ID:  " . $row['conf_id'] . "</h6>
            <h6>Check In:  " . $row['checkin'] . "</h6>
            <h6>Check Out:  " . $row['checkout'] . "</h6>
            <h6>Room Type:  " . $row['room_cat'] . "</h6>
            <h6>No of Rooms:  " . $row['roomcount'] . "</h6>
            <h6>No of Adults:  " . $row['adults'] . "</h6>
            <h6>No of Children:  " . $row['children'] . "</h6>
            <h6>Guest Name:  " . $row['name'] . "</h6>
            <h6>Guest Email:  " . $row['email'] . "</h6>
            <h6>Guest Phone:  " . $row['phone'] . "</h6>
            <h6>Guest Address:  " . $row['address'] . "</h6>
            <h6>Guest City:  " . $row['city'] . "</h6>
            <h6>Guest State:  " . $row['state'] . "</h6>
            </div>
            <div class='form-group'>
    
            </div>
    
            </ul>
             </div>
             <div class='col-md-3'></div>
                </div> ";
            } else {

                echo "
            <div class='row'>
         <div class='col-md-3'></div>
         <div class='col-md-6 well'>
            <h4>     Hello</h4>
            <hr>
            <ul>
            <div class='form-group'>
            <h6>We apologize, but we could not find any registration associated with the confirmation number you entered. Please double-check the number and try again later.</h6>
            </ul>
            </div>
            <div class='col-md-3'></div>
               </div> 
               ";
            }
        }
        ?>
    </div>
    <div class="text-center wid">
        <a class="btn btn-lg btn-primary button" href="index.php">Back to Home</a>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>