<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="style2.css" type="text/css" />
        <meta charset="utf-8">
        <title>Genre~~</title>
    </head>
    <body>
	  <div id="Fantasy">
	<h3>

	<img src="pics/hobbit.jpeg" alt="Fantasy" height="642" width="330" />
	   <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

	$sql="select `price` from `fantasy` where `productID`=1001";


	$result = $connection->query($sql);
	  while($row = $result->fetch(PDO::FETCH_BOTH)) {
		echo "Price: ". $row["price"] ;
  
  	}




        $connection=null;
	?>

	 <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='details.php'" /> </form></p>
	</h3></div>

	 <div id="Fantasy1">

	  <h3>

        <img src="pics/Silmarillion.jpeg" alt="Fantasy" height="642" width="430" />
           <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        $sql="select `price`, `productID`, `namebook`, `author` from `fantasy` where `productID`=1002";
	
	    $result = $connection->query($sql);
          while($row = $result->fetch(PDO::FETCH_BOTH)) {
                echo "Price: ". $row["price"] ;



        }



        $connection=null;
        ?>
	 <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='details1.php'" /> </form></p>
        </h3></div>

	         <div id="Fantasy2">

          <h3>

        <img src="pics/vlad.jpg" alt="Fantasy height="642" width="430" />
           <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        $sql="select `price`, `productID`, `namebook`, `author` from `fantasy` where `productID`=1004";

	            $result = $connection->query($sql);
          while($row = $result->fetch(PDO::FETCH_BOTH)) {
                echo "Price: ". $row["price"] ;


	}
        $connection=null;
        ?>
	 <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='details2.php'" /> </form></p>
        </h3></div>
	

    </body>
</html>
