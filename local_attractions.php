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
                    <li ><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="review.php">Bookings</a></li>
                    <li class="active"><a href="local_attractions.php">Local Attractions</a></li>
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

        <div class="row" style="color: #ed9e21">
            <div class="col-md-12 well">
                <h4><strong style="color: #ffbb2b">About</strong></h4><br>
                <p>Atlantic City is a resort city on the Atlantic coast of New Jersey in the United States. It is famous for its boardwalk, which stretches for several miles along the oceanfront and is lined with shops, restaurants, and entertainment venues. The city is also known for its casinos, which have been a major attraction since the legalization of gambling in the 1970s.

Apart from the casinos and boardwalk, Atlantic City has several other attractions that draw visitors from around the world. These include historic landmarks such as the Absecon Lighthouse, which is the tallest lighthouse in New Jersey, and the Steel Pier amusement park, which has been entertaining visitors since 1898..</p>
                <br>

            </div>
        </div>

        <div class="jumbotron">
            <div class="w3-content w3-section">
                <img class="mySlides w3-animate-fading" src="images/local/one.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/local/two.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/local/three.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/local/four.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/local/two.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/local/three.jpg" style="width:100%; height:450px;">
            </div>
        </div>

        <hr>

        <div class="row" style="color: #ffbb2b">
        <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49345.55992020534!2d-74.49410849529467!3d39.37666995350751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0dd576e5cc721%3A0x4a6fcb43e9675262!2sAtlantic%20City%2C%20NJ!5e0!3m2!1sen!2sus!4v1678556154793!5m2!1sen!2sus"
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