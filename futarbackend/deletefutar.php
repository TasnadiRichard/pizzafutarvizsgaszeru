<?php

$sql = '';
if (count($KeresFutar) > 1) {
    if (is_int(intval($KeresFutar[1]))) {
        $sql = 'DELETE FROM futar WHERE fazon='. $KeresFutar[1];
    }
} else {
    http_response_code(404);
    echo 'Nincs ilyen futár';
}
require_once './databaseconnect.php';

if ($result = $connection->query($sql)) {
    http_response_code(201);
    echo 'Sikeres Törlés';
} else {
    http_response_code(404);
    echo 'Törlés sikertelen';
}