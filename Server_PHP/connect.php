<?php

// This file creates a PDO connection

$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

return $connection;