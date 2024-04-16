<?php

$sql = '';
if (count($keresFutar) > 1) {
    if (is_int(intval($keresFutar[1]))) {
        $sql = 'SELECT * FROM futar WHERE fazon=' . $keresFutar[1];
    } else {
        http_response_code(404);
        echo 'Nincs ilyet futár';
    }
} else {
    $sql = 'SELECT * FROM futar WHERE 1';
}
require_once './databaseconnect.php';
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    $futarkarban = array();
    while ($row = $result->fetch_assoc()) {
        $futarkarban[] = $row;
    }
    http_response_code(200);
    echo json_encode($futarkarban);
} else {
    http_response_code(404);
    return json_encode(array("message" => 'Nincs egy ügyfél sem'));
}