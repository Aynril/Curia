<?php

// This file creates a PDO connection

$connection = new PDO('mysql:host=localhost;dbname=curia;charset=UTF8', "jhberlin19", "jhberlin19");
$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

return $connection;