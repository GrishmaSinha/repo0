<?php
session_start();
if (isset($_SESSION['login_user'])){
$username = $_SESSION['login_user'];
echo "Hi " . $username . "
";

}
else
{
	header("Location: login.php");
}
?>

<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>


      

<h2><a href = "fileupload.php">File Upload</a></h2>
 <h2><a href = "changepassword.php">Change Password</a></h2>

	</body>
	</html>

      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>
