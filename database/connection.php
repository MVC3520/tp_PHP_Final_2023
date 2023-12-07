<?php
function databaseConnection()
{
    $server = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "gestionConsultasDB";

    $conn = mysqli_connect($server, $username, $password, $dbname) or die("Connection failed");
    return $conn;
}
