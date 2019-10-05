<?php
    $pdo = new PDO(
    'mysql:host=116.203.31.114;dbname=curia',
    'jhberlin2019',
    'jhberlin2019');
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
                <td><?$result["id"]?></td>
                <td><?$result["begriff"]?></td>
                <td><?$result["definition"]?></td>
                <td><?$result["kategorie"]?></td>
                <td><?$result["autor"]?></td>
            </tr>
            <?php endwhile ?>

  </tbody>
</table>
</body>
</html>