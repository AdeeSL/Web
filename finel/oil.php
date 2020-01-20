
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
    <title>Oil Painting</title>

    <link rel="stylesheet" type="text/css" href="oil.css">
</head>
<bodyclass="home">
    <div class="home-l"><h1>OIL PAINTINGS</h1>
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
        
        <td><img src="25.jpg" width="250" height="250"></td>
        <td><img src="30.jpg" width="250" height="250"></td>
        <td><img src="28.jpg" width="250" height="250"></td>
    </tr> 
    <tr >
        <td width="250"><img src="icon.png" class="avatar"></td>
        <td colspan="2">    
            <h4>ABC</h4>
            <h6>Contact Number: +91256598214 </br>
                Email: abc@klm.com</br>
                <a href="www.facebook.com">Facebook</a></br></h6>
        </td>
    </tr>
    </table>
</div>

<div align="center">
    <table width="750" height="500" border="0" align="center"> 
        <tr height="250">
            
            <td><img src="31.jpg" width="250" height="250"></td>
            <td><img src="35.jpg" width="250" height="250"></td>
            <td><img src="34.jpg" width="250" height="250"></td>
        </tr> 
        <tr >
            <td width="250"><img src="icon.png" class="avatar"></td>
            <td colspan="2">    
                <h4>DEF</h4>
                <h6>Contact Number: +91256598214 </br>
                Email: abc@klm.com</br>
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
                <td><img src="26.jpeg" width="250" height="250"></td>
                <td><img src="29.jpg" width="250" height="250"></td>
                <td><img src="33.jpg" width="250" height="250"></td>
            </tr> 
            <tr >
                <td width="250"><img src="icon.png" class="avatar"></td>
                <td colspan="2">    
                    <h4>GHI</h4>
                    <h6>Contact Number: +91256598214 </br>
                Email: abc@klm.com</br>
                <a href="www.facebook.com">Facebook</a></br></h6>
                </td>
            </tr>
    </table>
</div>

<div align="center">

     <table width="750" height="500" border="0" align="center"> 
                <tr height="250">
                    <td><img src="27.jpg" width="250" height="250"></td>
                    <td><img src="32.jpeg" width="250" height="250"></td>
                    <td><img src="36.jpg" width="250" height="250"></td>
                </tr> 
                <tr >
                    <td width="250"><img src="icon.png" class="avatar"></td>
                    <td colspan="2">    
                        <h4>JKL</h4>
                        <h6>Contact Number: +91256598214 </br>
                            Email: abc@klm.com</br>
                            <a href="www.facebook.com">Facebook</a></br></h6>
                    </td>
                </tr>
     </table>
    </div>

  
  

   
</body>
</html>