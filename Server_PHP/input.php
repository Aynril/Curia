<?php

require("database.php");
// This file enters the submitted data to the db


$begriff = htmlspecialchars($_POST['begriff']);
$definition = htmlspecialchars($_POST['definition']);
$aktiv = 1;
$zuletzt_aktualisiert = htmlspecialchars($_POST['zuletzt_aktualisiert']);
$autor = htmlspecialchars($_POST['autor']);
$kategorie = htmlspecialchars($_POST['kategorie']);

echo $begriff.$definition.$aktiv.$zuletzt_aktualisiert.$autor.$kategorie;