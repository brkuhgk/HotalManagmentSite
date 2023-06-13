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
            height: 200px;
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
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="review.php">Bookings</a></li>
                    <li><a href="local_attractions.php">Local Attractions</a></li>
                    <li  class="active"><a href="hotel_dining.php">Hotel Dining</a></li>
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
                <img class="mySlides w3-animate-fading" src="images/hotel/1.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/hotel/2.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/hotel/3.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/hotel/4.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/hotel/5.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/hotel/1.jpg" style="width:100%; height:450px;">
            </div>
        </div>
        <hr>
        <div class="row" style="color: #ed9e21">
            <div class="col-md-12 well">
                <h4><strong style="color: #ffbb2b">About</strong></h4><br>
                <p>Hotel dining is an essential part of a guest's stay, and many hotels offer a range of dining options to cater to different tastes and preferences. Dining facilities in hotels can include restaurants, cafes, bars, room service, and catering services.

Restaurants in hotels can serve a variety of cuisines, from local to international, and range from casual to fine dining. Some hotels may have signature restaurants that offer a unique dining experience, while others may have multiple restaurants to choose from.

Cafes and bars in hotels can be a great place to relax and socialize, offering a range of beverages and light snacks. Many hotels also offer room service, allowing guests to order food and drinks to be delivered directly to their room.

In terms of recipes, hotels may have their own signature dishes or specialties, which may be featured on their menus. Some hotels may also offer cooking classes or demonstrations, allowing guests to learn how to prepare certain dishes or cuisines.

Overall, hotel dining can be a memorable part of a guest's stay, offering a variety of culinary experiences to suit different tastes and preferences.</p>
                <br>

            </div>
        </div>


    </div>

    <script src="my_js/slide.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>