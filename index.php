<!DOCTYPE html>
<html>
<head>
<title> Mark Up / Demo for imageUploader </title>
</head>
<body>

<form action="<?php basename(__FILE__);?>" method="POST" enctype="multipart/form-data">
<input type="file" name="imgfile[]" multiple="multiple" id="imgfile" accept="image/*" required />
<input type="submit" value="Upload Image" />
</form>

<?php
include 'imgclass.php';
$obj=new imageUploader;


if($_SERVER["REQUEST_METHOD"]=="POST"){
{
		$obj->upload_Image($_FILES['imgfile']['tmp_name'],$_FILES['imgfile']['name']);
}

}

?>
</body>
</html>
