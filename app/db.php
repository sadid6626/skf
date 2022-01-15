<?php

$host="localhost";
$user="root";
$pass="";
$db="skf";

$connection = new mysqli($host,$user,$pass,$db);

$connection->query("INSERT INTO users(name)VALUES('sadid')");



?>




