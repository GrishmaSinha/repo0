<?php  
session_start();
 require('config.php');
if (isset($_POST['username']) and isset($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `user` WHERE NAME='$username' and PASS='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if($count == 1) {

         $_SESSION['login_user'] = $username;

         header("location: welcome.php");



      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>



<html>
<head>
  <title>User Login</title>
  <style>
body{
  width:610px;
  font-family:calibri;
}
.error-message {
  padding: 7px 10px;
  background: #fff1f2;
  border: #ffd5da 1px solid;
  color: #d6001c;
  border-radius: 4px;
}
.success-message {
  padding: 7px 10px;
  background: #cae0c4;
  border: #c3d0b5 1px solid;
  color: #027506;
  border-radius: 4px;
}
.demo-table {
  background: #d9eeff;
  width: 100%;
  border-spacing: initial;
  margin: 2px 0px;
  word-break: break-word;
  table-layout: auto;
  line-height: 1.8em;
  color: #333;
  border-radius: 4px;
  padding: 20px 40px;
}
.demo-table td {
  padding: 15px 0px;
}
.demoInputBox {
  padding: 10px 30px;
  border: #a9a9a9 1px solid;
  border-radius: 4px;
}
.btnRegister {
  padding: 10px 30px;
  background-color: #3367b2;
  border: 0;
  color: #FFF;
  cursor: pointer;
  border-radius: 4px;
  margin-left: 10px;
}
</style>
</head>
<body>
<h1>User Login Form</h1>
      <form class="form-signin" method="POST">
      <table border="0" width="500" align="center" class="demo-table">

      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

        
        
        

          <tr>
<td>User Name</td>
<td><input type="text" class="demoInputBox" name="username"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="password" value=""></td>
</tr>
<tr>
<td colspan=2>
<input type="submit" name="register-user" value="Login" class="btnRegister"></td>
</tr>
      </table>
      </form>
      <a  href="register.php">Register</a>

</body>

</html>
