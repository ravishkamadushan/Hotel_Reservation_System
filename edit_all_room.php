<?php
    include_once 'admin/include/class.user.php'; 
    $user=new User(); 

$id=$_GET['id'];

$sql="SELECT * FROM rooms WHERE room_id='$id'";
$query=mysqli_query($user->db, $sql);
$row = mysqli_fetch_array($query);
 

if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $result=$user->edit_all_room($checkin, $checkout, $name, $phone,$id);
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="admin/css/reg.css" type="text/css">
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'yy-mm-dd'
                });
  } );
  </script>

    
</head>

<body>
    <div class="container mt-4" >
       <img class="img-responsive" src="images/adminbg.jpg" style="width:100%; height:280px;">      
        
        
        <div class="container mb-3">
        
        <div class="well mt-2">
            <h2>EDIT</h2>
            <h2><?php echo  $row['room_cat']?></h2>
            <hr>
            <form action="" method="post" name="room_category">
                <div class="mb-3">
                    <label for="checkin" class="form-label">Check In:</label>
                    <input type="text" class="datepicker form-control" name="checkin" value="<?php echo $row['checkin']?>">
                </div>
                <div class="mb-3">
                    <label for="checkout" class="form-label">Check Out:</label>
                    <input type="text" class="datepicker form-control" name="checkout" value="<?php echo $row['checkout']?>">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Enter Your Full Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Ravishka Madushan" value="<?php echo $row['name']?>"required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Enter Your Phone Number:</label>
                    <input type="text" class="form-control" name="phone" placeholder="+94XX XXX XXXX" value="<?php echo $row['phone']?>" required>
                </div>
                    <button type="submit" class="btn btn-lg btn-primary button mb-2" name="submit">Update</button>
                <br>
                <div id="click_here">
                    <a href="admin.php">Back to Admin Panel</a>
                </div>
            </form>
        </div>
    </div>
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</body>

</html>