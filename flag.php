<?php

$connection = include "Server_PHP/connect.php";
$id = $_GET["id"] ?? die("Kein Begriff gefunden!");

if(!empty($_POST["kommentar"])) {
    $stmt = $connection->prepare("INSERT INTO meldungen VALUES (NULL, ?, ?, ?, 0, 0)");
    $stmt->execute([$id, $_SERVER['REMOTE_ADDR'], htmlspecialchars($_POST["kommentar"])]);

    // Auto-Hiding terms flagged 5 times
    // ---------------------------------
    // - this excludes flags by the same IP to prevent easy abuse
    $stmt = $connection->prepare("SELECT DISTINCT ip_adresse FROM MELDUNGEN WHERE begriff=? AND erledigt=0");
    $stmt->execute([$id]);

    if($stmt->rowCount() == 5) {
        $stmt = $connection->prepare("UPDATE meldungen SET aktiv=0 WHERE id=?");
        $stmt->execute([$id]);
    }

    header("Location: /")
    die("Erfolgreich.")
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Logo.ico">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CURIA - Endlich mitreden bei politischen Diskussionen</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- sweet alerts -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md bg-light navbar-light">
 <!-- Brand / Logo-->
 <a class="navbar-brand" href="#">CURIA</a>

</nav>

   <!-- Begin page content -->
   <main role="main" class="container">
     <div class="jumbotron">
         <h1>Begriff melden</h1>
     </div>

     <?php
     $command = $connection->prepare("SELECT * FROM begriffe WHERE begriffe.id=? AND begriffe.aktiv=1");
     $command->execute([$id]);
     if($command->rowCount() != 1) die("Kein Begriff gefunden!");
     $column = $command->fetchObject();
     ?>
     <p class="lead">Du kannst Begriffe, die gegen unseren <a href="conduct.php">Code of Conduct</a> verstoßen, melden.</p>
     <p>Warum willst du diese Definition melden?</p>
     <pre>
     <?php
     echo $column->begriff . "<br>" . $column->definition;
     ?>
     </pre>
     <form action="" method="post">
     <div class="form-group">
     <label for="kommentar">Grund</label>
     <input type="kommentar" name="kommentar" id="kommentar" class="form-control" required>
   </div>
   <p>Hinweis: Mit dem Absenden der Meldung speichern wir (aus Schutzgründen) deine IP-Adresse.</p>
    <button type="submit" class="btn btn-primary">Melden</button>
    </form>
</main>
</div>
<footer class="footer">
     <div class="container">
       <span class="text-muted">Jugend hackt 2019, Berlin</span>
       <span class="text-muted">Impressum &middot; &copy; Domain by Clemens Rau &middot; Redaktion: Neele &middot; Version: <?php system("git rev-list --count HEAD") ?></span>

     </div>
   </footer>
</body>
</html>
