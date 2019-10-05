<?php
error_reporting(E_ALL);

require("Server_PHP/database.php");
    $statement = $pdo->prepare("SELECT * FROM `begriffe`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="admin.css" ref=stylesheet>
    <title>Just admin things</title>
</head>
<body>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Begriff</th>
      <th scope="col">Definition</th>
      <th scope="col">Kategorie</th>
      <th scope="col">Autor</th>
    </tr>
  </thead>
  <tbody>testing
        <?php 
            $statement->execute(); 
            
            //$result = $statement->fetchAll();
            while(($result = $statement->fetch(PDO::FETCH_ASSOC)) !== false):
            ?>
            <tr>
                <td><?php $result["id"]?></td>
                <td><?php $result["begriff"]?></td>
                <td><?php $result["definition"]?></td>
                <td><?php $result["kategorie"]?></td>
                <td><?php $result["autor"]?></td>
            </tr>
            <?php endwhile ?>

  </tbody>
</table>
</body>
</html>