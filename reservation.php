<?php
include_once 'admin/include/class.user.php';
$user = new User();

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $result = $user->check_available($checkin, $checkout);

    if (!($result)) {
        echo $result;
    }
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd',
                onSelect: function() {
                    var startDate = document.getElementById("StartDate").value;
                    var endDate = document.getElementById("EndDate").value;
                    var today = '<?php echo date('Y-m-d'); ?>';

                    if ((Date.parse(endDate) <= Date.parse(startDate))) {
                        alert("End date should be greater than Start date");
                        document.getElementById("EndDate").value = "";
                    } else if (Date.parse(startDate) < Date.parse(today)) {
                        alert("Start date should not be less than today's date");
                        document.getElementById("StartDate").value = "";
                    }
                }
            });
        });
    </script>

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

        label {
            color: #ffbb2b;
            font-size: 13px;
            font-weight: 100;
        }

        .center{
            padding-top: 320px ;
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
                    <li class="active"><a href="reservation.php">Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="review.php">Bookings</a></li>
                    <li><a href="local_attractions.php">Local Attractions</a></li>
                    <li><a href="hotel_dining.php">Hotel Dining</a></li>
                    <li><a href="spa_saloon.php">Spa & Saloon</a></li>
                    <li><a href="ratings.php">Reviews 😱🫣</a></li>
                </ul>
            </div>
        </nav>
        <div class='row'>
            <div class='col-md-4'></div>
            <div class='col-md-5 well'>
                <form action="" method="post" name="room_category">
                    <div class="form-group">
                        <label for="checkin">Check In :</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" class="datepicker" name="checkin" id="StartDate">
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check Out:</label>&nbsp;&nbsp;
                        <input type="text" class="datepicker" name="checkout" id="EndDate">
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary button" name="submit">Check Availability</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
        <?php
        if (isset($_REQUEST['submit'])) {
            $rooms_array = array();
            $roomcheck = 0;
            while ($rooms = mysqli_fetch_array($result)) {
                $rooms_array[] = $rooms;
            }
            $sql3 = "SELECT * FROM room_category";
            $sql3_res = mysqli_query($user->db, $sql3)  or die(mysqli_connect_errno() . "Query Doesnt run");
            if (mysqli_num_rows($sql3_res) > 0) {
                $room_pic = 1;
                while ($row = mysqli_fetch_array($sql3_res)) {
                    $avail_rooms = $row['available'];
                    foreach ($rooms_array as $room) {
                        if ($room['room_cat'] == $row['roomname']) {
                            $avail_rooms = $row['available'] - $room['occupied_rooms'];
                            break;
                        }
                    }
                    if($avail_rooms == 0)
                        continue;

                    $roomcheck++;

                    echo "
                            <div class='row'>
                            <div class='col-md-2'></div>

                            <div class='col-md-9 well'>
                                <h4>" . $row['roomname'] . "</h4><hr>
                                <img src='images/rooms/".$room_pic.".jpg' width='800' height='400' style='border: 1px solid black; margin: 10px;'/>
                                <h6>No of Beds: " . $row['no_bed'] . " " . $row['bedtype'] . " bed.</h6>
                                <h6>Available Rooms: " . $avail_rooms . "</h6>
                                <h6>Facilities: " . $row['facility'] . "</h6>
                                <h6>Price: " . $row['price'] . " $/night.</h6>
                                <h6>Total price for the duration of stay: " . $row['price']*$avail_rooms . " $/night.</h6>
                            </div>
                            <div class='col-md-1 center'>
                                <a href='./booknow.php?roomname=" . $row['roomname'] . "&checkin=" . $checkin . "&price=" . $row['price'] . "&checkout=" . $checkout . "'><button class='btn btn-primary button'>Book Now</button></a>
                            </div>   
                            </div>                   
                         ";


                 $room_pic++;
                }
            }

            if($roomcheck == 0){
                echo "
                            <div class='row'>
                            <div class='col-md-4'></div>
                            <div class='col-md-5 well'>
                                <h4>unfortunately, we do not have any rooms available for the dates you have selected.</h4>
                            </div>
                            <div class='col-md-3'>
                            </div>   
                            </div> 
                    ";
            }
        }
        ?>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>