<!DOCTYPE html>
<html lang="en">
 <head><link rel="stylesheet" href="Searchstyle.css" type="text/css" />
        <meta charset="utf-8">
        <title>Search</title>
    </head>
 <div id="header">
    <h2>Book Store</h2>
    <p>Nothing but classic books</p>
    <ul id="menu">
        <li><a href="index.php">home</li></a>
    </ul>
</div>
<div id = "Fantasy">
<h3>
<body>
<form name="frmSearch" method="post" action="search.php">
  <table width="599" border="0">
    <tr>
      <th>Look for results
      <input name="var1" type="text" id="var1">
     <input class="MyButton1" type="button"  value="Search"></th>
    </tr>
  </table>
</form>
<?php

       $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);


$var1 = str_replace(array('%','_'),'',$_POST['var1']);
if (!$var1)
{
    exit(' '.$var1);
}


$var1 = $_POST['var1'];


$query = "SELECT * FROM `results` WHERE `author` LIKE :search ";
$stmt = $connection->prepare($query);
$stmt->bindValue(':search', '%' . $var1 . '%', PDO::PARAM_INT);
$stmt->execute();

if ($stmt->rowCount() > 0) { 
$result = $stmt->fetchAll();

	echo "Results:<br/><br/>";
          foreach( $result as $row ) {
	echo " " . $row['namebook']  .  '          '."\n"; 
	 echo "<a href='" . $row["link"] . "'>Details</a><br/>";    
	


        }
}else{
	echo "mumu";
}


print ("\n");
?>
</h3></div>
</body>
</html>
