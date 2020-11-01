<?php
require_once("error.php");

$mysqli = new mysqli('localhost', 'barehacks', 'samplepassword', 'singaporemathcamp') or die(mysql_error($mysqli));
?>