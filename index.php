<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="style.css" type="text/css" />
        <meta charset="utf-8">
        <title>Shoppish~~</title>
    </head>
    <body>
	<h2>Book Store</h2>
        <img src="pics/bookz_index.jpg" alt="Shoppish!!" height="342" width="442" />
        <?php
/*        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        $sql="select * from products";
       foreach($connection->query($sql) as $row)
        {
                echo "<dt>Price: </dt><dd>". $row["price"] . " </dd>";
        }
        $connection=null;
*/
        ?>
	
	<p><form><input class="MyButton" type="button" value="Genre" onclick="window.location.href='genre.php'" /> </form></p>
	<p><form><input class="MyButton1"  type="button" value="About us" onclick="window.location.href='aboutus.php'" /> </form></p>
	<p><form><input class="MyButton1"  type="button" value="Contact us" onclick="window.location.href='aboutus.php'" /> </form></p>
    </body>
</html>
~


