<?php
$connection = new mysqli("localhost", " ", "pizza");
if ($connection->connect_error) {
    die("Connect failed: " . $connection->connect_error);
}
$connection->set_charset("utf8");