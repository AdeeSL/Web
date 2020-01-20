<?php
  if (empty($_SESSION['loggedin']))
    $_SESSION['loggedin'] = 0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acrylic Painting</title>

    <link rel="stylesheet" type="text/css" href="acrylic.css">
</head>
<bodyclass="home">
    <div class="home-l"><h1>ACRYLIC PAINTING </h1>
      <div class="home-nav"> 
        <ul>
          <li ><a href="home.php"> HOME</a></li>
          <li class="hmdropdwn">
            <a href="javascript:void()" class="homedrop">CATEGARY</a>
            <div class="homedrop-content">
              <a href="acrylic.php">ACRYLIC PAINTING</a>
            <a href="oil.php">OIL PAINTINGS</a>
            <a href="water.html">WATER COLOR PAINTINGS</a>
            <a href="pestal.html">PASTEL PAINTING</a>
            </div>
          </li>
          <li ><a href="#about us"> ABOUT US</a></lclass="txt"i>
          <li ><a href="#contact us"> CONTACT US</a></liclass="txt">
          <li ><a href="#services"> SERVICES</a></li>
          <li><?php
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

</br>
</br>
</br>


<div align="center" >
    <table width="750" height="500" border="0" align="left"> 
    <tr height="250">
        
        <td><img src="1.jpg" width="250" height="250"></td>
        <td><img src="6.jpg" width="250" height="250"></td>
        <td><img src="10.jpg" width="250" height="250"></td>
    </tr> 
    <tr >
        <td width="250"><img src="icon.png" class="avatar"></td>
        <td colspan="2">    
            <h4>ABC</h4>
            <h6>Contact Number: +91256598214 </br>
                Email: abc@xyz.com</br>
                <a href="www.facebook.com">Facebook</a></br></h6>
        </td>
    </tr>
    </table>
</div>

<div align="center">
    <table width="750" height="500" border="0" align="center"> 
        <tr height="250">
            
            <td><img src="11.jpg" width="250" height="250"></td>
            <td><img src="7.jpg" width="250" height="250"></td>
            <td><img src="12.jpg" width="250" height="250"></td>
        </tr> 
        <tr >
            <td width="250"><img src="icon.png" class="avatar"></td>
            <td colspan="2">    
                <h4>DEF</h4>
                <h6>Contact Number: +94568123654</br>
                  Email: def@xyz.com</br>
                  <a href="www.facebook.com">Facebook</a></br></h6>
            </td>
        </tr>
    </table>
</div>
<div align="center">
</br>
</br>
</br>
    <table width="750" height="500" border="0" align="left"> 
            <tr height="250">
                <td><img src="2.jpeg" width="250" height="250"></td>
                <td><img src="3.jpg" width="250" height="250"></td>
                <td><img src="9.jpg" width="250" height="250"></td>
            </tr> 
            <tr >
                <td width="250"><img src="icon.png" class="avatar"></td>
                <td colspan="2">    
                    <h4>GHI</h4>
                    <h6>Contact Number: +81654723659</br>
                      Email: ghi@xyz.com</br>
                      <a href="www.facebook.com">Facebook</a></br></h6>
                </td>
            </tr>
    </table>
</div>

<div align="center">

     <table width="750" height="500" border="0" align="center"> 
                <tr height="250">
                    <td><img src="4.jpg" width="250" height="250"></td>
                    <td><img src="5.jpg" width="250" height="250"></td>
                    <td><img src="8.jpeg" width="250" height="250"></td>
                </tr> 
                <tr >
                    <td width="250"><img src="icon.png" class="avatar"></td>
                    <td colspan="2">    
                        <h4>JKL</h4>
                        <h6>Contact Number: +251698147365 </br>
                          Email: jkl@xyz.com</br>
                          <a href="www.facebook.com">Facebook</a></br></h6>
                    </td>
                </tr>
     </table>
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
    
    
      
   
</body>
</html>