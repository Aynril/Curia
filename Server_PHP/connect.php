<?php

// This file creates a PDO connection

$connection = new PDO('mysql:host=localhost;dbname=curia;charset=UTF8', "jhberlin2019", "jhberlin2019");
$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

return $connection;