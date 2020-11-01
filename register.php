<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'singaporemathcamp') or die(mysql_error($mysqli));

if(isset($_POST['register'])){
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $datetime = $_POST['schedule'];

    echo("Lastname: $lastname, Firstname: $firstname, Schedule: $datetime");

    $mysqli -> query("INSERT INTO clients (lastname, firstname, schedule) VALUES ('$lastname', '$firstname', '$datetime') ") or 
       die($mysqli->error);
}
 
?>