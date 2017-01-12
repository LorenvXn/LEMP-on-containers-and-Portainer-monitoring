<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="style1.css" type="text/css" />
        <meta charset="utf-8">
        <title>Genre~~</title>
    </head>
    <body>
	  <div id="Fantasy">
	<h2>
	   <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);
        $sql="select `genrename` FROM `genre` WHERE `genreID` = 502";
	$result = $connection->query($sql);
	  while($row = $result->fetch(PDO::FETCH_BOTH)) {
                echo $row['id']. ' '. $row['name']. '<br />';      
    		echo $row[0]. ' '. $row[1]. '<br />';      
  	}
        $connection=null;
	?>
	</h2><a href = "Fantasy.php"><img src="pics/fantasy.jpg" alt="Fantasy" height="542" width="242" /></a></div>


        <div id="ScienceFiction">
		<h3>
		   <?php
        		$database   = $user = $password = "Alex";
        		$host       = "mysql";
        		$connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        		$query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        		$tables     = $query->fetchAll(PDO::FETCH_COLUMN);
        		$sql="select `genrename` FROM `genre` WHERE `genreID` = 501";
        		$result = $connection->query($sql);
          		while($row = $result->fetch(PDO::FETCH_BOTH)) {
                	echo $row['id']. ' '. $row['name']. '<br />';
                	echo $row[0]. ' '. $row[1]. '<br />';
        		}
        		$connection=null;
        		?>
       			 </h3>
			       <a href="ScienceFiction.php"><img src="pics/Solaris.jpg" height="542" width="242" /></a></div>



        <div id="Horror">

		                <h2>
                   <?php
                        $database   = $user = $password = "Alex";
                        $host       = "mysql";
                        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
                        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
                        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);
                        $sql="select `genrename` FROM `genre` WHERE `genreID` = 503";
                        $result = $connection->query($sql);
                        while($row = $result->fetch(PDO::FETCH_BOTH)) {
                        echo $row['id']. ' '. $row['name']. '<br />';
                        echo $row[0]. ' '. $row[1]. '<br />';
                        }
                        $connection=null;
                        ?>
                         </h2>
                               <a href="Horror.php"><img src="pics/bullet.jpg" height="542" width="242" /></a></div>

        <div id="Adventure">
                <h2>
                   <?php
                        $database   = $user = $password = "Alex";
                        $host       = "mysql";
                        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
                        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
                        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);
                        $sql="select `genrename` FROM `genre` WHERE `genreID` = 504";
                        $result = $connection->query($sql);
                        while($row = $result->fetch(PDO::FETCH_BOTH)) {
                        echo $row['id']. ' '. $row['name']. '<br />';
                        echo $row[0]. ' '. $row[1]. '<br />';
                        }
                        $connection=null;
                        ?>
                         </h2>
                               <a href="Adventure.php"><img src="pics/moby.jpg" height="542" width="242" /></a></div>

    </body>
</html>
~


