<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="styleSF.css" type="text/css" />
        <meta charset="utf-8">
        <title>Genre~~</title>
    </head>
    <body>
	  <div id="ScienceFiction">
	<h3>

	<img src="pics/Solaris.jpg" alt="ScienceFiction" height="642" width="330" />
	   <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

	$sql="select `price` from `sciencefiction` where `productID`=2001";


	$result = $connection->query($sql);
	  while($row = $result->fetch(PDO::FETCH_BOTH)) {
		echo "Price: ". $row["price"] ;
  
  	}




        $connection=null;
	?>

	 <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='SFdetails.php'" /> </form></p>
	</h3></div>

	 <div id="ScienceFiction1">

	  <h3>

        <img src="pics/dune.jpeg" alt="ScienceFiction" height="642" width="430" />
           <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        $sql="select `price`, `productID`, `namebook`, `author` from `sciencefiction` where `productID`=2002";
	
	    $result = $connection->query($sql);
          while($row = $result->fetch(PDO::FETCH_BOTH)) {
                echo "Price: ". $row["price"] ;


        }

        $connection=null;
        ?>
	 <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='SFdetails1.php'" /> </form></p>
        </h3></div>

	         <div id="ScienceFiction2">

          <h3>

        <img src="pics/Nightfall.jpg" alt="ScienceFiction" height="642" width="430" />
           <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        $sql="select `price`, `productID`, `namebook`, `author` from `sciencefiction` where `productID`=2004";

	            $result = $connection->query($sql);
          while($row = $result->fetch(PDO::FETCH_BOTH)) {
                echo "Price: ". $row["price"] ;


	}
        $connection=null;
        ?>
	 <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='SFdetails2.php'" /> </form></p>
        </h3></div>
	

    </body>
</html>
