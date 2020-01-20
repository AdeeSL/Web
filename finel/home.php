<?php
include_once('connection.php');
$query = "SELECT * FROM seller";
$result = mysqli_query($conn, $query);
if (empty($_SESSION['loggedin']))
  $_SESSION['loggedin'] = 0;

// print_r($_SESSION);
// var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HOME</title>
  <link rel="stylesheet" type="text/css" href="home.css">
</head>



<body class="home">

  <div class="home-l">
    <h2>ART GALLERY</h2>
    <div class="home-nav">
      <ul>
        <li><a href="home.php"> HOME</a></li>
        <li class="hmdropdwn">
          <a href="javascript:void()" class="homedrop">CATEGARY</a>
          <div class="homedrop-content">
            <a href="acrylic.php">ACRYLIC PAINTING</a>
            <a href="oil.php">OIL PAINTINGS</a>
            <a href="water.html">WATER COLOR PAINTINGS</a>
            <a href="pestal.html">PASTEL PAINTING</a>
            
            <a href="digital.html">DIGITAL PAINTING</a>
          </div>
        </li>
        <li><a href="#CART">CART</a></lclass="txt"i>
        <li><a href="#contact us"> CONTACT US</a></liclass="txt">
        <li><a href="#services"> SERVICES</a></li>
        <li class="hmdropdwn"><?php
            echo ($_SESSION['loggedin']) ? '<a href="javascript:void()" class="homedrop">ACCOUNT</a>
            <div class="homedrop-content">
            <a href="profile.php">Profile</a>
            <a href="settings.php">Settings</a>
            <a href="logout.php">Logout</a>
          </div>'
             : '<a href="login.php"><i class="fa fa-user"></i> Login</a>'; ?></li>
      </ul>
    </div>
  </div>
  <div class="introbox">
    <div class="introtxt"></div>
    <h1>WELCOME TO ART GALLERY</h1>
    <div class="buysell">
      <div class="bs">
        <h4>BUY </h4>
      </div>
      <div class="bs">
        <h4> SELL</h4>
      </div>
    </div>
  </div>
  </div>


  <div class="guidebox">
    <div class="gtopic">
      <h2> <br><br> Every artist was <br>
        first an Amature</h2>
      
    </div>
    <div class="gtopic">
      <h2><br>Every child is an artist.<br> The problem is how to remain<br> an artist once we grow up</h2>
    </div>
    <div class="gtopic">
      <h2><br> You don’t take a photograph, <br> you make it</h2>
    </div>
  </div>



  <div class="quoteimg">

    <div class="imgcrdpol">
      <div class="quotetxt">
        <p><b>"Every child is an artist.</b></p>
        <p><b>The problem is how to remain an artist once we grow up."</b></p>
      </div>

      <img src="Pablo-Picasso.jpg">
      <div class="container">
        <p>Pablo Picasso</p>
      </div>
    </div><br>



    <div class="imgcrdpol">
      <div class="quotetxt">
        <p><b>"Creativity takes you courage."</b></p>
      </div>
      <img src="matisse.jpg">
      <div class="container">
        <p>Henri Matisse</p>
      </div>
    </div>



    <div class="imgcrdpol">
      <div class="quotetxt">
        <p><b>"Every artist was first an Amature."</b></p>
      </div>
      <img src="Ralph-Waldo-Emerson.jpg">
      <div class="container">
        <p>Ralph Waldo</p>
      </div>
    </div>
  </div>



  <div class="guidebox">
    <div class="gtopic">
      <h2> Contact Us</h2>
    </div>
    <div class="gtopic">
    <div id="googleMap" style="width:350px;height:250px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>


    </div>
    <div class="gtopic">
      <h4> Tele</h4>
      <p>0112658947</p>
    </div>
  </div>


  <div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>


  </div>
  <div class="imgbutton">
    <div class="social">
      <a href="#facebook">
        <div class="socialtxt"><img src="fb.png">
          <p>Like us</p>
        </div>
      </a>
      <a href="#facebook">
        <div class="socialtxt"><img src="insta.png">
          <p>Follow us</p>
        </div>
      </a>
      <a href="#facebook">
        <div class="socialtxt"><img src="twitter.png">
          <p>Connect with us</p>
        </div>
      </a>
      <a href="#facebook">
        <div class="socialtxt"><img src="yt.png">
          <p>Subscribe us</p>
        </div>
      </a>
    </div>
  </div>


  <footer class="foot">
    <div class="footbox">
      <div class="foottxt">
        <h4>xxxxxxxxxxxx</h4>
      </div>
      <div class="foottxt">
        <h4>xxxxxxxxxxxx</h4>
        <p>xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br></p>
      </div>
      <div class="foottxt">
        <h4>xxxxxxxxxxxx</h4>
        <p>xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br></p>
      </div>
      <div class="foottxt">
        <h4>xxxxxxxxxxxx</h4>
        <p>xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br>
          xxxxxxxxxxxxxxxxxxxxxxx<br></p>
      </div>
    </div>
  </footer>
</body>

</html>