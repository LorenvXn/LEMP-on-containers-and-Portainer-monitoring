<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="style3.css" type="text/css" />
        <meta charset="utf-8">
        <title>Genre~~</title>
    </head>
    <body>
	  <div id="Adventure">
	<h3>

	<img src="pics/moby.jpg" alt="Adventure" height="642" width="330" />
	   <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

	$sql="select `price` from `adventure` where `productID`=4001";


	$result = $connection->query($sql);
	  while($row = $result->fetch(PDO::FETCH_BOTH)) {
		echo "Price: ". $row["price"] ;
  
  	}


        $connection=null;
	?>

	 <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='Advdetails.php'" /> </form></p>
	</h3></div>

	 <div id="Adventure1">

	  <h3>

        <img src="pics/thinair.jpeg" alt="Adventure" height="642" width="430" />
           <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        $sql="select `price`, `productID`, `namebook`, `author` from `adventure` where `productID`=4002";
	
	    $result = $connection->query($sql);
          while($row = $result->fetch(PDO::FETCH_BOTH)) {
                echo "Price: ". $row["price"] ;



        }



        $connection=null;
        ?>
	 <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='Advdetails1.php'" /> </form></p>
        </h3></div>

	         <div id="Adventure2">

          <h3>

        <img src="pics/lifeofpi.jpeg" alt="Adventure height="642" width="430" />
           <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        $sql="select `price`, `productID`, `namebook`, `author` from `adventure` where `productID`=4003";

	            $result = $connection->query($sql);
          while($row = $result->fetch(PDO::FETCH_BOTH)) {
                echo "Price: ". $row["price"] ;


	}
        $connection=null;
        ?>
	 <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='Advdetails2.php'" /> </form></p>
        </h3></div>
	

    </body>
</html>
