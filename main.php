<?php
 session_start();
 

 ?>
<!DOCTYPE html>
<html>
<head>  
  <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>Project</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <?php require 'navbar.php';
        require 'slider.html';
  ?>
        
        <style>
            .form-signin {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
                color: #017572;
             }
                  
      
         .form-signin .form-control {
                position: relative;
                height: auto;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 10px;
                font-size: 16px;
         }
         
         
         .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
        </style>
      
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:Arial, sans-serif">
    
    
<h1 style = "text-align:center; font-family: 'Coming Soon', cursive; text-align: center; font-size: 40px; text-color:#fff; text-shadow: 2px 2px #f0f0f0">Welkom bij De Ooievaar</h1>
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == 'admin') {
                  $_SESSION['valid'] = true;
                  $_SESSION['username'] = 'admin';
                  
                  echo 'Je bent nu ingelogged';
               }else {
                  $msg = 'Verkeerd wachtwoord of login naam';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container" style = "text-align:center;">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = admin" 
               ></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = admin" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			        
      </div> 
    
    
    
</body>
</html>
