<?php
require('config.php');
session_start();
if (isset($_SESSION['login_user'])){
if(count($_POST)>0)
{
  //setting variables
$password1 = mysqli_real_escape_string($connection, $_POST['newPassword']);
$password2 = mysqli_real_escape_string($connection, $_POST['confirmPassword']);
$username = mysqli_real_escape_string($connection, $_SESSION['login_user']);
$user = $_POST['userName'];
//cocmparing and changing password

if ($password1 <> $password2)
{
    echo "your passwords do not match";
}

else if(mysqli_query($connection, "UPDATE `user` SET PASS = '$password1' WHERE NAME = '$username'"))
{
	echo "Hi " . $user . "";
    echo " Password Changed...";

}

}

}
else
{
  header("Location: login.php");
}
?>

<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />

<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
onSubmit="return validatePassword()"
}

if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>

</head>
<body>

<form name="frmChange" method="post" action="" >
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Change Password</td>
</tr>
<tr>
<td width="40%"><label>User Name</label></td>
<td width="60%"><input type="text" name="userName" class="txtField"/><span id="userName"  class="required"></span></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
</tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
<a  href="welcome.php">Home</a>

</body></html>