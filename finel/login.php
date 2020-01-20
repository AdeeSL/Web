<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body class="login"  >
        <img src="login.jpg">
        <div class="log-inbox"> 
            <h1>Log in</h1>
                <form action="logindb.php" method="POST">
                    <div class="textbox">
                        <input  type="text" name="Uname" placeholder="Username/Email">
                    </div>
                    <div class="textbox"> 
                        <input type="password" name="Pass" placeholder="Password">
                    </div>       
                    
                    <button type="submit" name="submit" class="btn">Login</button> 
                    <button class="btn" type="button" name="Signup" colour="white" ><a href="signup1.html" >Singup</a></button>
                </form>  
        </div>  
        
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $('.form').find('input').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass();
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
    </script>
    </body>
</html>

    

  