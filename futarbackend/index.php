<?php
switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        require_once 'futarbackend/getfutar.php';
        break;
    case "DELETE":
        require_once 'futarbackend/deletefutar.php';
        break;
    case "POST":
        require_once 'futarbackend/postfutar.php';
        break;
    case "PUT":
        require_once 'futarbackend/putfutar.php';
        break;

    default:
        break;
}