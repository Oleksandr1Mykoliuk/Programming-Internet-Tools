<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php
echo "Get method";

	echo "<br>Get do not support body<br>";
	echo "Hello " . $_GET["user"] . "<br>";
	echo "Your password: " . $_GET["pass"] . "<br>";
	echo "Yoour email: " . $_GET["mail"] . "<br>";
	?>

</body>
</html>
