<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="styleHorror.css" type="text/css" />
        <meta charset="utf-8">
        <title>Genre~~</title>
    </head>
    <body>
	  <div id="Horror">
	<h3>

	<img src="pics/bullet.jpg" alt="Horror" height="642" width="330" />
	   <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

	$sql="select `price` from `horror` where `productID`=3001";


	$result = $connection->query($sql);
	  while($row = $result->fetch(PDO::FETCH_BOTH)) {
		echo "Price: ". $row["price"] ;
  
  	}




        $connection=null;
	?>

	 <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='Hdetails.php'" /> </form></p>
	</h3></div>

	 <div id="Horror1">

	  <h3>

        <img src="pics/dracula.jpg" alt="Horror" height="642" width="430" />
           <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        $sql="select `price`, `productID`, `namebook`, `author` from `horror` where `productID`=3002";
	
	    $result = $connection->query($sql);
          while($row = $result->fetch(PDO::FETCH_BOTH)) {
                echo "Price: ". $row["price"] ;


        }

        $connection=null;
        ?>
	 <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='Hdetails1.php'" /> </form></p>
        </h3></div>

	         <div id="Horror2">

          <h3>

        <img src="pics/frank.jpg" alt="Horror" height="642" width="430" />
           <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        $sql="select `price`, `productID`, `namebook`, `author` from `horror` where `productID`=3003";

	            $result = $connection->query($sql);
          while($row = $result->fetch(PDO::FETCH_BOTH)) {
                echo "Price: ". $row["price"] ;


	}
        $connection=null;
        ?>
	 <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='Hdetails2.php'" /> </form></p>
        </h3></div>
	

    </body>
</html>
