<?php

$connection = require("connect.php");
// This file enters the submitted data to the db


$begriff = htmlspecialchars($_POST['begriff']);
$definition = htmlspecialchars($_POST['definition']);
$aktiv = 1;
$zuletzt_aktualisiert = htmlspecialchars($_POST['zuletzt_aktualisiert']);
$autor = htmlspecialchars($_POST['autor']);
$kategorie = htmlspecialchars($_POST['kategorie']);

$statement = $connection->prepare("INSERT INTO `begriffe` (`id`, `begriff`, `definition`, `aktiv`, `zuletzt_aktualisiert`, `autor`, `kategorie`) VALUES (NULL, '$begriff', '$definition', '1', CURRENT_TIMESTAMP, '$autor', '$kategorie')");
$res = $statement->execute();

<<<<<<< HEAD
header("Location: index.html?info=success");
=======
echo "Successfully saved";
>>>>>>> c4579961c7614e9bab99044ec502454acd4783bd
