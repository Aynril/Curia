<?php
error_reporting(0); // Safety: no error reporting

header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");


// Constants
define('INVALID_ERROR', json_encode(["response"=>"error", "reason"=>"INVALID_CONNECTION_DATA", "errno"=>1]));
define('NOT_FOUND_ERROR', json_encode(["response"=>"error", "reason"=>"NO_RESPONSE_FOUND", "errno"=>2]));

// This file returns the searched data to the db
$connection = include "connect.php";

// Fetching the submitted term or fail
$term = $_GET["term"] ?? die(INVALID_ERROR);

$command = $connection->prepare("SELECT * FROM begriffe WHERE begriffe.begriff=? AND begriffe.aktiv=1");
$command->execute([$term]);

if($command->rowCount() == 1) {
    $column = $command->fetchObject();

    echo json_encode([
        "response"        => "data",
        "class"           => "term",
        "term"            => $column->begriff,
        "definition"      => $column->definition,
        "last_update"     => $column->zuletzt_aktualisiert,
        "category"        => $column->kategorie
    ]);
} else {
    die(NOT_FOUND_ERROR);
}

