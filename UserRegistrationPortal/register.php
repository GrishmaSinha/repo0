<?php
    require('config.php');

    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `user` (NAME, PASS, EMAIL) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }

    ?>

<html>
<head>
    <title>User Registeration Using PHP & MySQL</title>
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
<h1>User Registeration Form</h1>
<div class="container">
      <form class="form-signin" method="POST">
      <table border="0" width="500" align="center" class="demo-table">
      
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>


        <div class="input-group">

<tr>
<td>User Name</td>
<td><input type="text" class="demoInputBox" name="username" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
</tr>


<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="password" value=""></td>
</tr>

<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="email" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>

<tr>
<td colspan=2>
<input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
        </table>
      </form>
      <a href="login.php">Login</a>
</div>

</body>

</html>
