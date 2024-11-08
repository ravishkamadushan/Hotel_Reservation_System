<?php
    include_once 'admin/include/class.user.php'; 
    $user=new User(); 



    if(isset($_REQUEST[ 'submit'])) 
    { 
        extract($_REQUEST); 
        $result=$user->check_available($checkin, $checkout);
        if(!($result))
        {
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
    <title>Hotel Booking</title>

    
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'yy-mm-dd'
                });
  } );
  </script>
    
    
   
    
    
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


    <div class="container m-5 row justify-content-center">
      
      
      
       
        
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5">
        <div class="well">
            <form action="" method="post" name="room_category">
                <div class="mb-3">
                    <label for="checkin" class="form-label">Check In :</label>
                    <input type="text" class="form-control datepicker" name="checkin">
                </div>
                <div class="mb-3">
                    <label for="checkout" class="form-label">Check Out:</label>
                    <input type="text" class="form-control datepicker" name="checkout">
                </div>
                <button type="submit" class="btn btn-primary m-5" name="submit">Check Availability</button>
            </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<?php   

if(isset($_REQUEST['submit']))
{
    $selectedCheckinDate = $_REQUEST['checkin']; // Assuming 'checkin' is the name of your check-in date input field
    $selectedCheckoutDate = $_REQUEST['checkout']; // Assuming 'checkout' is the name of your checkout date input field
    
    $currentDate = date('Y-m-d');
    
    if(strtotime($selectedCheckinDate) >= strtotime($currentDate) && strtotime($selectedCheckoutDate) >= strtotime($selectedCheckinDate))
    {
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                $room_cat = $row['room_cat'];
                $sql = "SELECT * FROM room_category WHERE roomname='$room_cat'";
                $query = mysqli_query($user->db, $sql);
                $row2 = mysqli_fetch_array($query);
                
                echo "
                    <div class='row'>
                        <div class='col-md-4'></div>
                        <div class='col-md-5'>
                            <table class='table table-bordered'>
                                <tr>
                                    <th>".$row2['roomname']."</th>
                                </tr>
                                <tr>
                                    <td>No of Beds: ".$row2['no_bed']." ".$row2['bedtype']." bed.</td>
                                </tr>
                                <tr>
                                    <td>Available Rooms: ".$row2['available']."</td>
                                </tr>
                                <tr>
                                    <td>Facilities: ".$row2['facility']."</td>
                                </tr>
                                <tr>
                                    <td>Price: ".$row2['price']." tk/night.</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href='./booknow.php?roomname=".$row2['roomname']."'>
                                            <button class='btn btn-primary button'>Book Now</button>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class='col-md-3'></div>
                    </div>
                ";
            }
        }
    }
    else
    {
        echo "Please select valid check-in and checkout dates.";
    }
}
?>


    </div>

    


   <!--Footer -->
<div footer class="footer container-fluid" style="background-color: #adb5c2;  bottom: 0; width: 100%;">
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
<div class="Copyright container-fluid text-center " style="background-color: #8e949e; font-weight: 100; font-size: small; height: 30px;  bottom: 0; width: 100%;">
  <p>Copyright © ICBT Batch 101 Team 4 All rights reserved.</p>

</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>