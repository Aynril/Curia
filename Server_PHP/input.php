<?php

require("database.php");
// This file enters the submitted data to the db


$begriff = htmlspecialchar($_POST['begriff']);
$definition = htmlspecialchar($_POST['definition']);
$aktiv = 1;
$zuletzt_aktualisiert = htmlspecialchar($_POST['zuletzt_aktualisiert']);
$autor = htmlspecialchar($_POST['autor']);
$kategorie = htmlspecialchar($_POST['kategorie']);

echo $begriff.$definition.$aktiv.$zuletzt_aktualisiert.$autor.$kategorie;