<?php

$sql = '';
if (count($keresFutar) > 1) {
    if (is_int(intval($keresFutar[1]))) {
        $sql = 'DELETE FROM futar WHERE fazon='. $keresFutar[1];
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