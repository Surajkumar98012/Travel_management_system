 <?php
           include 'db_conn.php';
           $q="SELECT COUNT(*) AS count FROM hotel";
            $query=mysqli_query($conn,$q);
            foreach ($query as $res) {
              $output=$res['count'];
            }

             $r="SELECT COUNT(*) AS counts FROM cart";
            $queries=mysqli_query($conn,$r);
            foreach ($queries as $res1) {
              $outputs=$res1['counts'];
            }

            $s="SELECT COUNT(*) AS count1 FROM users";
            $queries1=mysqli_query($conn,$s);
            foreach ($queries1 as $res2) {
              $output1=$res2['count1'];
            }


            $t="SELECT COUNT(*) AS count2 FROM flight";
            $queries2=mysqli_query($conn,$t);
            foreach ($queries2 as $res3) {
              $output2=$res3['count2'];
            }
 ?>


<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin DashBoard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--  counter js files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

  <style type="text/css">
   body{
    background-image: url(4.jpg);

    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
    height: 100vh;

  }

  #mains{
    padding-left: 400px;
    text-align: center;
  }
  li{
    color: white;
    padding: 10px;
    margin-right: 25px;
  }
  a{
    color:black;
  }
  #nav{
    color: white;

  }
  #navhead{
   background:rgba(0, 0, 0, 0.6);
 }
 #navbarSupportedContent>ul{
  font-size: 0.9em;
  font-weight: bolder;
}
#lists{
  margin-right: 100px;
}
#nav:hover{
  color: white;
  text-decoration: none;
  background-color:rgba(75,0,130,0.85);
  border-radius: 45px;
  padding: 10px 20px;
}
.buttons{
 background-color:rgba(75,0,130,0.85);
 color: white;
 font-weight: bolder;
 padding:10px 20px;
 border-radius: 40px;
}
.buttons:hover{
  color: black;
  background: rgba(65,242,65,0.9);
  text-decoration: none;
}



.input-icons i {
  position: absolute;
}

.input-icons {
  width: 100%;

}

.icon {
  padding: 10px;
  min-width: 40px;
}

.input-field {
  width: 100%;
  padding-left: 35px;

}
.error{
  background: #f2dede;
  color:#A94442;
  padding: 10px;
  width: 100%;
  border-radius: 8px;
  margin: 20px auto;

}

.success{
  background:rgba(12,245,12,0.3);
  color:#40754C;
  padding: 10px;
  width: 100%;
  border-radius: 8px;
  margin: 20px auto;

}
.card{
  border-radius: 5px;
  box-shadow: 0 15px 25px rgba(0,0,0,0.6);
  margin: 8px;
  padding: 35px;
  text-align: center;
  color: white;
    background :rgba(255, 255, 255, 0.16);

    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    font-family: sans-serif;
}
.card:hover{
  background:rgb(240, 145, 0);
}

.button{
  background-color:yellow;
  text-decoration: none;
  border-radius: 5px;
  text-align: center;
  margin:0 75px;
  padding: 6px;
}
.button:hover{
  background-color: green;
  color: white;
  text-decoration: none;
}
.icon{
  color: yellow;
  font-size: 42px;
}
#drop{
  text-decoration: none;
  color:red;
}

#drop:hover{
  background:yellow;
  padding: 10px;
  border-radius: 5px;
}







.counter-up{
  min-height: 50vh;
  background-size: cover;
  background-attachment: fixed;
  padding: 0 50px;
  position: relative;
  display: flex;
  align-items: center;
}
.counter-up::before{
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}


.counter-up .content{
  z-index: 1;
  position: relative;
  display: flex;
  width: 100%;
  height: 100%;

  align-items: center;
  justify-content: space-between;
}
.counter-up .content .box{
  box-shadow: 0 15px 25px rgba(0,0,0,0.5);
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  flex-direction: column;
  padding:25px 68px;
  margin: 15px;
}
.content .box .icon{
  font-size: 48px;
  color: rgb(15,165,14);
}
.content .box .counter{
  font-size: 30px;
  font-weight: 500;
  color:green;
  font-family: sans-serif;
}
.content .box .text{
  font-weight:bold;
  font-size: 1em;
  color: rgb(15,165,14);
}

@media screen and (max-width: 1036px) {
  .counter-up{
    padding: 50px 50px 0 50px;
  }
  .counter-up .content .box{
    width: calc(50% - 30px);
    margin-bottom: 50px;
  }
}
@media screen and (max-width: 580px) {
  .counter-up .content .box{
    width: 100%;
  }
}
@media screen and (max-width: 500px) {
  .wrapper{
    padding: 20px;
  }
  .counter-up{
    padding: 30px 20px 0 20px;
  }
}

.color{
  color: rgb(15,165,14);
}

</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navhead">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <p style="color:rgb(240, 145, 0);font-size: 1.65em;font-weight: bolder;padding-left: 110px;margin: 2px;">travelers<span style="color:indigo;">Go</span> </p>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul id="navbar" class="navbar-nav ">
        <li>
          <a  id="nav"  href="#">Home<span class="sr-only">(current)</span></a>
        </li>
           <li class="dropdown">
                <a id="nav" href="#" class="dropdown-toggle" data-toggle="dropdown" >Hotels<span class="caret"></span> </a>
               <ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.95);">
               <li><a id="drop" href="admin/add_hotel.php">Add Hotels</a></li>
               <li><a id="drop" href="admin/edit_hotel.php">Edit Hotels</a></li>

               </ul>
          </li>
        <li class="dropdown">
                <a id="nav" href="#" class="dropdown-toggle" data-toggle="dropdown" >Transport<span class="caret"></span> </a>
               <ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.95);">
               <li><a id="drop" href="admin/add_flight.php">Add Flight</a></li>
               <li><a id="drop" href="admin/edit_flight.php">Edit Flight</a></li>
               <li><a id="drop" href="admin/add_bus.php">Add Buses</a></li>
               <li><a id="drop" href="admin/edit_bus.php">Edit Buses</a></li>
               <li><a id="drop" href="admin/add_car.php">Add Cars</a></li>
               <li><a id="drop" href="admin/edit_car.php">Edit Cars</a></li>
               </ul>
          </li>
        <li id="list">
          <a   id="nav"   href="admin/view_booking.php">View Booking</a>
        </li>
        <li id="list">
          <a   id="nav"   href="admin/view_user.php">View Users</a>
        </li>
        <li id="lists">
          <a   id="nav"   href="logout.php">Logout</a>
        </li
      </ul>
    </div>
  </nav>


  <div class="container" id="mains">
   <div class="row" style="padding-top: 95px;">
     <div class="col-md-6" style="padding: 26px;background-color: rgba(0, 0, 0, 0.7);border-radius: 25px;" >
       <h1 style="font-size: 3.1em;font-weight: bolder;color: rgb(240, 145, 0);">Hello <?php echo $_SESSION['name'];?> </h1>
       <h4 style="margin-top:20px;color: white;font-size: 1.5em;">WELCOME TO OUR DASHBOARD !!</h4>

       <br>
       <a style="color:white;background: indigo;padding: 10px;border-radius: 10px;text-decoration: none;" href="#about">Get Started with Us</a>



</div>
  <!--   <div class="col-md-6" style="padding: 20px;">
      <img class="img-fluid" src="1.png">
   </div> -->
</div>
</div>

<div class="container" id="about" style="margin-top:90px;">
  <div class="row">
    <h3 style="text-align:center;color:rgb(255,105,45);padding-left: 65px;">ADMIN DASHBOARD</h3>

    <div class="counter-up">
    <div class="content">
      <div class="box" style="background:rgba(0,255, 0, 0.35);">
        <div class="icon"><i class="fa fa-building" aria-hidden="true"></i></div>

        <div class="counter"><?php echo $output;?></div>
        <div  class="text">Total Hotels</div>

      </div>
      <div class="box" style="background:rgba(222,0, 0, 0.35);">
        <div style="color:red" class="icon"><i class="fa fa-th-list" aria-hidden="true"></i></div>
        <div style="color:red" class="counter"><?php echo $outputs;?></div>
        <div style="color:red" class="text">Total Booking</div>

      </div>
      <div class="box" style="background:rgba(0,0,255, 0.35);">
        <div style="color:blue" class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
        <div style="color:blue" class="counter"><?php echo $output1;?></div>
        <div style="color:blue" class="text">Total Users</div>

      </div>
      <div class="box" style="background:rgba(240,145, 0, 0.35);">
        <div style="color:orange;" class="icon"><i class="fa fa-plane"></i></div>
        <div style="color:orange;" class="counter"><?php echo $output2;?></div>
        <div style="color:orange;" class="text">Total Flight</div>

      </div>
    </div>
  </div>

   <script>
    $(".counter").counterUp({delay:10,time:1000});
  </script>
  </div>
</div>
<br>
<br>
<div class="container" style="margin-top:30px;">
      <h2 style="text-align:center;text-decoration: underline;">Why Choose Us</h2>
  <div class="row">
    <br>
    <br>
    <p>TravelersGo is an Indian online travel company founded in 2021. Headquartered in Gurugram, Haryana, the company provides online travel services including flight tickets, domestic and international holiday packages, hotel reservations, rail, and bus tickets. As of 31 March 2022, they have 14 company-owned travel stores in 14 cities, over 30 franchisee-owned travel stores in 28 cities, and counters in four major airports in India. MakeMyTrip has offices in New York, Singapore, Kuala Lumpur, Phuket, Bangkok, and DubaiTravelersGo is an Indian online travel company founded in 2021. </p>
  </div>
</div>

<div class="container" style="margin-top:30px;">
  <div class="row">
    <h2 style="text-align:center;">Our Vission:</h2>
    <br>
    <br>
    <p>TravelersGo is an Indian online travel company founded in 2021. Headquartered in Gurugram, Haryana, the company provides online travel services including flight tickets, domestic and international holiday packages, hotel reservations, rail, and bus tickets. As of 31 March 2022, they have 14 company-owned travel stores in 14 cities, over 30 franchisee-owned travel stores in 28 cities, and counters in four major airports in India. MakeMyTrip has offices in New York, Singapore, Kuala Lumpur, Phuket, Bangkok, and DubaiTravelersGo is an Indian online travel company founded in 2021. </p>
  </div>
</div>

<div class="container" style="margin-top:30px;">
  <div class="row">
    <h2 style="text-align:center;">Transport safety tips:</h2>
    <br>
    <br>
    <p>TravelersGo is an Indian online travel company founded in 2021. Headquartered in Gurugram, Haryana, the company provides online travel services including flight tickets, domestic and international holiday packages, hotel reservations, rail, and bus tickets. As of 31 March 2022, they have 14 company-owned travel stores in 14 cities, over 30 franchisee-owned travel stores in 28 cities, and counters in four major airports in India. MakeMyTrip has offices in New York, Singapore, Kuala Lumpur, Phuket, Bangkok, and DubaiTravelersGo is an Indian online travel company founded in 2021. </p>
  </div>
</div>

<div class="container" style="margin-top:30px;">
  <div class="row">
    <h2 style="text-align:center;">Hotel safety tips:</h2>
    <br>
    <br>
    <p>TravelersGo is an Indian online travel company founded in 2021. Headquartered in Gurugram, Haryana, the company provides online travel services including flight tickets, domestic and international holiday packages, hotel reservations, rail, and bus tickets. As of 31 March 2022, they have 14 company-owned travel stores in 14 cities, over 30 franchisee-owned travel stores in 28 cities, and counters in four major airports in India. MakeMyTrip has offices in New York, Singapore, Kuala Lumpur, Phuket, Bangkok, and DubaiTravelersGo is an Indian online travel company founded in 2021. </p>
  </div>
</div>



<div style="margin-bottom: -5px;">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2F2F2F" fill-opacity="1" d="M0,64L18.5,80C36.9,96,74,128,111,149.3C147.7,171,185,181,222,176C258.5,171,295,149,332,149.3C369.2,149,406,171,443,192C480,213,517,235,554,218.7C590.8,203,628,149,665,133.3C701.5,117,738,139,775,176C812.3,213,849,267,886,261.3C923.1,256,960,192,997,144C1033.8,96,1071,64,1108,80C1144.6,96,1182,160,1218,181.3C1255.4,203,1292,181,1329,181.3C1366.2,181,1403,203,1422,213.3L1440,224L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path></svg>
</div>

<footer class="page-footer font-small indigo" id="contact">

  <div class="container-fluid" style="background:rgb(47,47,47); padding-bottom: 40px;">
  <!-- Grid row -->
    <div class="row">
      <div class="col-md-4" style="margin: 15px;text-transform: uppercase;font-family:Candara;font-size: 0.8em;color: white;">
         <img style="margin-left: 35px;"  width="67%" height="89%" src="logo.png">
      </div>

      <div id="quick_link" class="col-md-2" style="margin: 10px;font-family:Candara;font-size: 1.1em;color: white;">
        <h3 style="color:#ff6f00;font-weight: bolder;text-decoration: underline;">QUICK LINKS</h3>
        <br>
        <a class="link_hover" style="color: white;text-decoration: none;" href="#about">Dashboard</a><br>
        <a class="link_hover" style="color: white;text-decoration: none;" href="#">Add Hotels</a><br>
        <a class="link_hover" style="color: white;text-decoration: none;" href="#">View Booking</a><br>
        <a class="link_hover" style="color: white;text-decoration: none;" href="#">View Users</a><br>
        <a class="link_hover" style="color: white;text-decoration: none;" href="#contact">Contact Us</a>

      </div>

      <div class="col-md-5 socialmail" style="margin: 10px;text-align: center;">
        <h3 style="color: #ff6f00;font-weight: bolder;text-decoration: underline;text-align: center;">CONTACT US</h3><br>

        <p style="color: grey;font-size: 1.2em;">Let us inform you about everything important directly</p>
        <a  id="mail" href=mailto:support@srjrnw9@gmail.com">support@travelersGo.com</a>

       <!--  <input  Size= 31; type="text" name="email" placeholder="Enter your email">
        <a style="background:#ff6f00;padding-top: 8px;padding-bottom: 9px;margin-left: -5px; " href="mailto:abhishek@www.swoc.tech"><img width="10%" height="12%" style="padding: 5px;" src="telegram-plane-brands.svg"></a> -->
        <br>
        <br>

        <div class="social-menu">
  <p style="font-size: 1.8em;color: white;text-align: center;">Connect with us:</p><br>
  <ul>
    <li><a href=#" target="_blank"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
    <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
  </ul>
</div>

     </div>




    </div>
  </div>
  <div class="footer-copyright text-center py-3" style="background-color:rgb(47,47,47);color: grey;font-size: 1.1em;line-height: 1.5em;" >Made with  &#10084;  by  <a style="color: #ff6f00" href="https://scriptindia.org/">travelersGo</a> <br>
    <p style="color: white;"> Copyright © 2021 travelersGo under the GPL3 license. All rights reserved.</p>
  </div>


</footer>





</body>
</html>

<?php
}else{
    header("Location:index.php");
    exit();
}

 ?>


