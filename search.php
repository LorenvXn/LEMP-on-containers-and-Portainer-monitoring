<!DOCTYPE html>
<html lang="en">
        <title>search</title>
        <meta charset="utf-8">

    </head>
<body>
<form name="frmSearch" method="post" action="search.php">
  <table width="599" border="0">
    <tr>
      <th>Keyword
      <input name="var1" type="text" id="var1">
      <input class="MyButton1"  type="button" value="Search"></th>
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
    exit('Insert a value: '.$var1);
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
	 echo "<a href='" . $row["link"] . "'>Link</a><br/>";    
	


        }
}else{
	echo "mumu";
}


print ("\n");
?>
</body>
</html>
