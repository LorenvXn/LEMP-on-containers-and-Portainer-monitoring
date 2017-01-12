<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="style2.css" type="text/css" />
        <meta charset="utf-8">
        <title>Genre~~</title>
    </head>
    <body>
          <div id="Fantasy">

          <h3>

        <img src="pics/vlad.jpg" alt="Fantasy height="642" width="430" />
           <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);


	$statement=$connection->prepare('select link  from results where productID=:compare');
	$term = 1002;
	$statement->execute(array(':compare' => $term));


	foreach($statement as $row){
		echo "<a href='" . $row["link"] . "'>Link</a>";

		}


        $connection=null;
        ?>
         <p><form><input class="MyOrderButton" type="button" value="Details" onclick="window.location.href='details2.php'" /> </form></p>
        </h3></div>


    </body>
</html>


