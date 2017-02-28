<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php
	if(is_uploaded_file($_FILES["filename"]["tmp_name"])){
		if(!move_uploaded_file($_FILES["filename"]["tmp_name"], "./" . $_FILES["filename"]["name"]))
		echo "fasle";
	$uplink= "./" . $_FILES["filename"]["name"];
	$size= "height=\"400\" , width=\"300\"";
	echo "<img src='$uplink' alt='error' $size><br>";}
	echo "Post method<br>";
	echo "Hello " . $_POST["user"] . "<br>";
	echo "Your password: " . $_POST["pass"] . "<br>";
	echo "Your email: " . $_POST["mail"] . "<br>";

	?>

</body>
</html>
