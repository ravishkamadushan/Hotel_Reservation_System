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

    
    
    <style>
       
   

        .video-container video {
           position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
            height: 75%;
            width: 100%;
            object-fit: cover;
            
        }
        .TopNavBar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1; 
            background-color: rgba(0, 0, 0, 0.5); 
            padding: 1px 0; 
        }
		
    </style>
    
    
</head>

<body>
<div class="video-container">
        <video src="images/vid-1.mp4" id="video" loop autoplay muted></video>
 </div>

<div class="TopNavBar"  style="position: relative;" >
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          
            <a href=""><img src="../hotel booking/images/Logo With Name.png" class=" w-50  " alt=""></a>
            <a href="User/UserLogin.php"><button class="btn btn-outline-primary" type="submit"><b>Login</b></button></a>
        </div>
    </nav>
</div>






 <nav class="navbar navbar-expand-lg  sticky-top rounded-0  " style=" margin-top:30%; position:sticky; background-color:#adb5c2;">
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
      
      
       


         <!--About Us section Start-->

<Div class="topbarcontent container fs-3 $blue-500 mc-auto  ">
  <figure class="text-center">
    <blockquote class="blockquote">
      <p style="font-size:200%;" >A personal tropical sanctuary set within the heart of the city</p> 
      <p style="font-size:350% ;color:#FFD700 ;" >Welcome to Sea House Hotel - Mirissa</p>
    </blockquote>
    <figcaption class="blockquote-footer container fs-5">
    The establishment of Sea House Hotel in Mirissa marked a significant entry 
    into the local hospitality sector back in 2003. This endeavor introduced a novel concept of luxurious 
    accommodation by the seaside, resonating well with travelers seeking unparalleled experiences in Sri Lanka. 
    From its inception, Sea House Hotel garnered enthusiastic acclaim from visitors, underscoring a strong demand for exceptional lodging options that embrace the tranquil beauty of the coastal landscape.<cite title="Source Title"></cite>
    </figcaption>
  </figure>


  <div class="d-grid gap-2 col-1 mx-auto">
  <a href="About Us.php"><button class="btn btn-primary" type="button">About us</button></a>
    
  </div>

  <br>
</Div>
     <!--About Us section End-->



      <!--Service Packages strat-->
<Div class="ServiceHome  " style="background-color: #e8ebf0; margin-top: 30px;" >

<Div style="font-weight: 200; text-align: center;">

<p style="font-size:300% ;color:#ffd902 ; text-shadow: #0e0d0d;  " > Service On Your Fingertips </p>
<P style="font-size:150% ;  " > View Our Hotel Packages </P>

<!--Service Packages Carousel Strat-->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" 
    aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      

<!--Service Packages Carousel Card Strat slide 1-->

      <div class="card-group">
        <div class="card">
          <img src="../hotel booking/images/bed_1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Duplex </h5>
            <p class="card-text">No of Beds: 2 single bed. </p>
            <p class="card-text">Facilities: AC, TV, Wifi. </p>
            <p class="card-text">Price:Rs. 1500 per/night.  </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="../hotel booking/images/bed_2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Family</h5>
            <p class="card-text">No of Beds: 2 double bed.</p>
            <p class="card-text">Facilities: Sofa, TV, WIFI, Balcony, AC.</p>
            <p class="card-text">Price: Rs.3500 per/night. </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="../hotel booking/images/bed_3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Family</h5>
            <p class="card-text">No of Beds: 2 double bed.</p>
            <p class="card-text">Facilities: Sofa, TV, WIFI, Balcony, AC.</p>
            <p class="card-text">Price: Rs.3500 per/night. </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      
    <!--Service Packages Carousel Card End slide1-->



  <!--Service Packages Carousel Card Strat slide 2-->
    </div>
    <div class="carousel-item">
      <div class="card-group">
        <div class="card">
          <img src="../Img/Service Packages/Pre Marital Screening Package for Men/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Duplex </h5>
            <p class="card-text">No of Beds: 2 single bed. </p>
            <p class="card-text">Facilities: AC, TV, Wifi. </p>
            <p class="card-text">Price:Rs. 1500 per/night.  </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="../Img/Service Packages/CT Angiogram Package/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Family</h5>
            <p class="card-text">No of Beds: 2 double bed.</p>
            <p class="card-text">Facilities: Sofa, TV, WIFI, Balcony, AC.</p>
            <p class="card-text">Price: Rs.3500 per/night. </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="../Img/Service Packages/ENT - Tymponoplasty/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Family</h5>
            <p class="card-text">No of Beds: 2 double bed.</p>
            <p class="card-text">Facilities: Sofa, TV, WIFI, Balcony, AC.</p>
            <p class="card-text">Price: Rs.3500 per/night. </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>
    <!--Service Packages Carousel Card End slide2-->


      

      <!--Service Packages Carousel Card Strat slide 3-->

     
    <div class="carousel-item">
      <div class="card-group">
        <div class="card">
          <img src="../Img/Service Packages/Pre Marital Screening Package for Men/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Duplex </h5>
            <p class="card-text">No of Beds: 2 single bed. </p>
            <p class="card-text">Facilities: AC, TV, Wifi. </p>
            <p class="card-text">Price:Rs. 1500 per/night.  </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="../Img/Service Packages/CT Angiogram Package/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Family</h5>
            <p class="card-text">No of Beds: 2 double bed.</p>
            <p class="card-text">Facilities: Sofa, TV, WIFI, Balcony, AC.</p>
            <p class="card-text">Price: Rs.3500 per/night. </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="../Img/Service Packages/ENT - Tymponoplasty/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Family</h5>
            <p class="card-text">No of Beds: 2 double bed.</p>
            <p class="card-text">Facilities: Sofa, TV, WIFI, Balcony, AC.</p>
            <p class="card-text">Price: Rs.3500 per/night. </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>

      <!--Service Packages Carousel Card End slide 3-->


    </div>
  </div>
  
</div>   

</Div>
<!--Service Packages Carousel  End-->


<br>
<Div class="d-grid gap-2 col-2 mx-auto">
<a href="room.php"><button type="button" class="btn btn-outline-info" style="text-align: center;">View Packages</button></a>
</Div>
<br>


</Div>
<!--Service Packages End-->   
       
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
      <a href="User/UserRegistration.php"><p style="font-size:100% ; font-weight: 400; margin: 0 ">Register</p></a>
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
    
    
    
    
    




    <script src="my_js/slide.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>