<?php
                session_start();
                if(isset($_SESSION['login_user']))
                {
                  echo '<h1>You have been successfully logged out</h1>';
                unset($_SESSION['login_user']);
                
                }
                else
                {
                }
                session_destroy();
?>



<html>
   
   <head>
      <title>Log Out</title>
   </head>
   
   <body>

      
      
      <h2><a href = "login.php">Log In</a></h2>
   </body>
   
</html>
