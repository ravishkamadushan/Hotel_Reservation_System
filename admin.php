<?php session_start();
include_once 'admin/include/class.user.php';
$user=new User();
$uid=$_SESSION[ 'uid']; 
if(!$user->get_session()) 
{ 
    header("location:admin/login.php"); 
} 
if(isset($_GET['q'])) 
{ 
    $user->user_logout();
 header("location:index.php"); 
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

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
        
        h4 {
            color: #ffbb2b;
        }
        
        ul {
            color: white;
            font-size: 13px;
        }
    </style>


</head>

<body>


<nav class="navbar navbar-expand-lg  sticky-top  bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="Home.php">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
            </li>
            
              </ul>
              <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-danger">Logout</button>
                        </a>
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


        <br>


        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Room Category</h4>
                <hr>
                <ul>
                    <li><a href="admin/addroom.php">Add Room Category</a></li>
                    <li><a href="show_room_cat.php">Show All Room Category</a></li>
                    <li><a href="show_room_cat.php">Edit Room Category</a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Bookings</h4>
                <hr>
                <ul>
                    <li><a href="room.php">Book Now</a></li>
                    <li><a href="show_all_room.php">Show All Booked Rooms</a></li>
                    <li><a href="show_all_room.php">Edit Booked Room</a></li>
                </ul>
            </div>
           <div class="col-md-3"></div>
        </div>
        
        
       








    </div>

    <br>


    <!--Footer -->
<div footer class="footer container-fluid" style="background-color: #adb5c2; position: absolute; bottom: 0; width: 100%;">
  <br>
<div class="container-fluid text-center ">
  <div class="row">
    <div class="col-4 container" style="text-align: left;">
      <img src="../Img/Logo/LogoWithName2.png"  class="card-img-top m-2 w-50 "  alt="...">
     
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
<div class="Copyright container-fluid text-center " style="background-color: #8e949e; font-weight: 100; font-size: small; height: 30px; position: fixed; bottom: 0; width: 100%;">
  <p>Copyright © ICBT Batch 101 Team 4 All rights reserved.</p>

</div>










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>