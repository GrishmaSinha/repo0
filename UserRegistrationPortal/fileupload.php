<head>
<title>File Upload</title>
</head>
<body>
 
<form action="fileupload.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>
 
 
</form>
<?php
if(isset($_POST['Submit1']))
{ 
$filepath = "/opt/lampp/htdocs/blue/uploads/" . $_FILES["file"]["name"];
 
if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "Image Uploaded Successfully";
} 
else 
{
echo "Error !!";
}
} 
?>

<h2><a href = "welcome.php">Home</a></h2>
 
</body>
</html>
