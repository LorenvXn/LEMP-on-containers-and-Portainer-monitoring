<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<title>Ordering</title>
	</head>
	<body>
  	<img src="http://previews.123rf.com/images/cubrazol/cubrazol1003/cubrazol100300113/6626645-An-office-rubber-stamp-with-the-letters-ordere
d-Stock-Photo.jpg" alt="Shoppish!!" height="342" width="243"/>
    	<?php
    	$database   = $user = $password = "Alex";
    	$host   	= "mysql";
    	$connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
    $insert = $connection->exec("INSERT INTO products VALUES (1003, 'PEN', 'Pen Blue', 3000, 3333.23)");

    echo "You will receive an email about the ordering confirmation";

    	$connection=null;

    	?>
	</body>
</html>
