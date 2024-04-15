<?php
    $putadat = fopen("php://input", "r");
    $raw_adat = '';
    while($chunk = fread($putadat, 1024))
        $raw_adat .= $chunk;
    fclose($putadat);
    $adatJSON = json_decode($raw_adat);
    $fazon = $_POST("fazon");
    $fnev = $_POST("fnev");
    $ftel = $_POST("ftel");
    require_once "./databaseconnect.php";
    $sql = "UPDATE `futar` SET `fnev`='?',`ftel`='?' WHERE ˙fazon`='?'";
    $stml = $connection->prepare($sql);
    $stml -> bind_param("isi", $fazon, $fnev, $ftel);
    if($stml->execute()){
        http_response_code(201);
        echo "Sikeresen módosítás";
    } else {
        http_response_code(404);
        echo 'Sikertelen módosítás';
    }