<?php

require("database.php");
// This file enters the submitted data to the db

$begriff = $_POST['begriff'];
$definition = $_POST['definition'];
$aktiv = 1;
$zuletzt_aktualisiert = $_POST['zuletzt_aktualisiert'];
$autor = $_POST['autor'];
$kategorie = $_POST['kategorie'];

echo $begriff.$definition.$aktiv.$zuletzt_aktualisiert.$autor.$kategorie;