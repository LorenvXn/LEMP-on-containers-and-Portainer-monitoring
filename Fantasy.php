<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="style2.css" type="text/css" />
        <meta charset="utf-8">
        <title>Genre~~</title>
    </head>
    <body>
	  <div id="Fantasy">
	<h3>

	<img src="pics/hobbit.jpeg" alt="Fantasy" height="542" width="242" />
	   <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

	$sql="select `price`, `productID` from `fantasy` where `productID`=1001";

	 echo "<table border='1'>
        <tr>
        <th>Product ID </th>
        <th>Price</th>
        </tr>";

	$result = $connection->query($sql);
	  while($row = $result->fetch(PDO::FETCH_BOTH)) {
	   echo "<tr>";
          echo "<td>". $row['productID'] . "</td>";
          echo "<td>" . $row['price'] . "</td>";
          echo "</tr>";

  	}


        echo "</table>";


        $connection=null;
	?>

         <p><form><input class="MyOrderButton" type="button" value="Order" onclick="window.location.href='order.php'" /> </form></p>
	</h3></div>


    </body>
</html>
~


