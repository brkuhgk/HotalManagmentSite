<?php
include_once 'admin/include/class.user.php';
$user = new User();

$roomname = $_GET['roomname'];
$checkin = $_GET['checkin'];
$checkout = $_GET['checkout'];
$effprice = false;


if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    
    $confirmation_id = rand(1000, 9999);
    $price = $price * $roomcount;

    $emailq="SELECT email FROM `rooms` where email IS NOT NULL";
    $sql = mysqli_query($user->db, $emailq);
    while($row = mysqli_fetch_array($sql)){
        if($email == $row['email']){
            $price = $price - 100;
            $effprice = true;
            break;
        }
    }

    $result = $user->booknow($confirmation_id,$email,$address,$city,$state,$checkin, $checkout, $name, $phone, $roomname, $price, $roomcount, $adults, $children);
    
    header("location:confirmation.php?roomname=$roomname&effprice=$effprice&confirmation_id=$confirmation_id&price=$price&result=$result&checkin=$checkin&checkout=$checkout&name=$name&email=$email&phone=$phone&address=$address&city=$city&state=$state&roomcount=$roomcount&adults=$adults&children=$children");

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>srinithDineshKarthikPHP</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/reg.css" type="text/css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>

<body>
    <div class="container">


        <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">


        <div class="well">
            <h2>Book Now: <?php echo $roomname; ?></h2>
            <hr>
            <h2>Checkin: <?php echo $checkin; ?> | Checkout: <?php echo $checkout; ?></h2>
            <hr>
            <form action="" method="post" name="room_category">
                <div class="form-group">
                    <label for="name">Enter Your Full Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Jhon Wicky" required>
                </div>

                <div class="form-group">
                    <label for="email">Enter Your Email Address:</label>
                    <p> <b>[If you have registered before, use the same email address to avail a surprise discount on the booking] </b></p>
                    <input type="text" class="form-control" name="email" placeholder="XXXXX@XX.com" required>
                </div>

                <div class="form-group">
                    <label for="phone">Enter Your Phone Number:</label>
                    <input type="text" class="form-control" name="phone" placeholder="018XXXXXXX" required>
                </div>

                <div class="form-group">
                    <label for="address">Enter Your Address:</label>
                    <input type="text" class="form-control" name="address" placeholder="XX st, Apt XX " required>
                </div>

                <div class="form-group">
                    <label for="city">Enter Your City:</label>
                    <input type="text" class="form-control" name="city" placeholder="Union" required>
                </div>

                <div class="form-group">
                    <label for="state">Enter Your State:</label>
                    <input type="text" class="form-control" name="state" placeholder="New Jersey" required>
                </div>

                <div class="form-group">
                    <label for="roomcount">number of rooms</label>
                    <input type="number" class="form-control" name="roomcount" min="1" required>
                </div>

                <div class="form-group">
                    <label for="adults">number of adults</label>
                    <input type="number" class="form-control" name="adults" min="1" required>
                </div>

                <div class="form-group">
                    <label for="children">number of children</label>
                    <input type="number" class="form-control" name="children" min="1" required>
                </div>

                <br>
                <div>
                        <a class="btn btn-link" href="index.php">Back to Home</a>
                        <button type="submit" class="btn btn-lg btn-primary button" name="submit">Book Now</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>

</html>