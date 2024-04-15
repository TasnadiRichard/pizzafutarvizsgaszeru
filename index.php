<?php
    header('Content-Type: application/json; charset=UTF-8');
    header('Acces-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    $keresFutar = explode('/', $_SERVER['QUERY_STRING']);
    if($keresFutar[0] === "futarkarban"){
        require_once 'futarbackend/index.php';
    }
    else {
        http_response_code(405);
        echo"Nincs ilyen API";
    }