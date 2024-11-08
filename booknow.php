<?php
    include_once 'admin/include/class.user.php'; 
    $user=new User(); 

    $roomname=$_GET['roomname'];

    if(isset($_POST['submit'])) 
    { 
        extract($_POST); 
        $result=$user->booknow($checkin, $checkout, $name, $phone,$roomname);
        if($result)
        {
            echo "<script type='text/javascript'>
                  alert('".$result."');
             </script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>

    <!-- Bootstrap 5.3.1 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>
</head>

<body>

<nav class="navbar navbar-expand-lg  sticky-top  bg-body-tertiary" style="position:sticky">
      <div class="container-fluid">
        <a class="navbar-brand" href="Home.php"><img src="../hotel booking/images/Logo With Name.png" class="w-50" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="room.php">Room &amp; Facilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="reservation.php">Online Reservation</a>
            </li>
              </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container">
        
        <div class="well">
            <h2>Book Now: <?php echo $roomname; ?></h2>
            <hr>
            <form action="" method="post" name="room_category">
                <div class="mb-3">
                    <label for="checkin" class="form-label">Check In:</label>
                    <input type="text" class="datepicker form-control" name="checkin">
                </div>
                <div class="mb-3">
                    <label for="checkout" class="form-label">Check Out:</label>
                    <input type="text" class="datepicker form-control" name="checkout">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Enter Your Full Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Ravishka Madushan" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Enter Your Phone Number:</label>
                    <input type="text" class="form-control" name="phone" placeholder="+94XX XXX XXXX" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Book Now</button>
                <br>
                <div id="click_here">
                    <a href="index.php">Back to Home</a>
                </div>
            </form>
        </div>
    </div>


    <br>
<br>
 <!--Footer -->
<div footer class="footer container-fluid" style="background-color: #adb5c2;  bottom: 0; width: 100%;">
  <br>
<div class="container-fluid text-center ">
  <div class="row">
    <div class="col-4 container" style="text-align: left;">
      <img src="../hotel booking/images/Logo With Name.png"  class="card-img-top m-2 w-50 "  alt="...">
     
    </div>
    <div class="col-3 container " style="text-align: left;">
      <h5> <u>Quick Menu</u> </h5>
      <a href="index.php"><p style="font-size:100% ; font-weight: 400; margin: 0; " >Home</p></a>
      <a href="room.php"><p style="font-size:100% ; font-weight: 400; margin: 0 ">Room &amp; Facilities</p></a>
      <a href="reservation.php"><p style="font-size:100% ; font-weight: 400; margin: 0  ">Online Reservation</p></a>
      <a href="../hotel booking/User/loginForme.php"><p style="font-size:100% ; font-weight: 400; margin: 0 " href="../HTML/Login.html">Login</p></a>
      <a href="Registerspatient.php"><p style="font-size:100% ; font-weight: 400; margin: 0 ">Register</p></a>
    </div>
    <div class="col-2 container " style="text-align: left;">
      <h5> <u>Contact Us</u> </h5>
      <img src="../Img/SVG/Gmail.png" class="card-img-top m-2 " style="width: 30px; height: 30px;" alt="...">
      <img src="../Img/SVG/in.png" class="card-img-top m-2 " style="width: 30px; height: 30px;" alt="...">
      <img src="../Img/SVG/Fb.png" class="card-img-top m-2 " style="width: 30px; height: 30px;" alt="...">
      
      <br>
      <br>
      <h5 style="color: rgb(248, 7, 7);"> <u>Hotline</u> </h5>
      
    </div>
  </div>
</div>
<br>
<br>

</div>
<div class="Copyright container-fluid text-center " style="background-color: #8e949e; font-weight: 100; font-size: small; height: 30px;  bottom: 0; width: 100%;">
  <p>Copyright © ICBT Batch 101 Team 4 All rights reserved.</p>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
