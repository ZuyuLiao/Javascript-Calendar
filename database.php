<?php
// Content of database.php

$mysqli = new mysqli('localhost', 'weichen123', 'zuyu123', 'calendar');

if($mysqli->connect_errno) {
    printf("Connection Failed: %s\n", $mysqli->connect_error);
    exit;
}
?>