<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Shoppish~~</title>
    </head>
    <body>
        <img src="http://cdn.birthdayinabox.com/images/product/large/TY8457SW.jpg" alt="Shoppish!!" height="342" width="243"/>
        <?php
        $database   = $user = $password = "Alex";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        $sql="select * from products";

        echo "<table border='1'>
        <tr>
        <th>Product ID </th>
        <th>Name</th>
        </tr>";

        foreach($connection->query($sql) as $row)
        {
          echo "<tr>";
          echo "<td>". $row['productID'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "</tr>";
        }
        echo "</table>";

        $connection=null;

        ?>
    </body>
</html>

