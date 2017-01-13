<!DOCTYPE html>
<html>

            <head><link rel="stylesheet" href="Horrorstyledetails.css" type="text/css" />
        <meta charset="utf-8">

    </head>
    <body>
        <div id="header">
    <h2>Book Store</h2>


	<body>



			<h1>Login or Register</h1>

<form method="post" >
  <table width="599" border="0">
    <tr>		
			<input type="text" placeholder="name" name="name" autofocus /><br \>
			<input type="text" placeholder="your@email.com" name="email" autofocus /> 
			<input type="text" placeholder="password" name="password" autofocus />	
			

			<button type="submit">login/register</button>


    </tr>
  </table>
</form>
			<span></span>

		</form>
<?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

    if(isset($_POST['email'], $_POST['password'], $_POST['name'])){

	$sql="SELECT `email`, `name`, `password` FROM  `logreg`  WHERE `email` LIKE :email AND `name` LIKE  :name AND `password` LIKE :password";

        $query = $connection->prepare($sql);

        $query->bindParam(':email', $_POST['email']);
	$query->bindParam(':password', $_POST['password']);
	$query->bindParam(':name', $_POST['name']);

        $query->execute();

        if($row = $query->fetch()){
            $_SESSION['email'] = $row['email'];
	   $_SESSION['password'] = $row['password'];
           $_SESSIOM['name']=$row['name'];



	echo "<script> location.href='http://localhost/index.php'; </script>";
        exit;
        }
    }
?>

	</body>
</html>
