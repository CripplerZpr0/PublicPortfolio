<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "agd_2020_5sem";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {

    echo "i cannot connect to the server for some reason qwq, please try again later. <br>$conn";
}
?>