<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>srinithDineshKarthikPHP</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;

        }

        .wellfix {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 163px;
        }

        body {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        p {
            font-size: 13px;
        }

        .pro_pic {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
        }

    </style>


</head>

<body>
<div class="container">


    <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="room.php">Room &amp; Facilities</a></li>
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


    <div class="jumbotron">
        <div class="w3-content w3-section">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/1.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/2.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/3.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/4.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/5.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/6.jpg" style="width:100%; height:450px;">
        </div>
    </div>
    <hr>
    <div class="row" style="color: #ed9e21">
        <div class="col-md-12 well">
            <h4><strong style="color: #ffbb2b">About</strong></h4><br>
            <p>As the travel industry continues to grow, hotel booking websites have become an essential tool for
                travelers seeking comfortable and convenient accommodations. A hotel booking website allows customers to
                browse and book hotel rooms online, from anywhere in the world. These websites are designed to simplify
                the hotel booking process by providing a user-friendly interface that allows customers to easily search
                for hotels based on their travel needs.</p>
            <br>

        </div>
    </div>
    <div class="row" style="color: #ffbb2b">
        <div class="col-md-4 wellfix">
            <h4><strong>Contact Us</strong></h4>
            <hr>
            Address : Claridge Hotel, 123 South Indiana Avenue, Atlantic City, NJ 08401, USA<br>
            Mail : ClaridgeHotel@gmail.com <br>
            Phone : 9999543210 <br>
        </div>
        <div class="col-md-4"></div>

    </div>

    <br>

    <div class="row" style="color: #ffbb2b">
        <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3084.9377039286205!2d-74.43445748872483!3d39.35764731929859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0ee402bb78913%3A0xf61cbfef11a1fa0f!2sThe%20Claridge%20Hotel!5e0!3m2!1sen!2sus!4v1678555147308!5m2!1sen!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="col-md-4"></div>

    </div>


</div>


<script src="my_js/slide.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>