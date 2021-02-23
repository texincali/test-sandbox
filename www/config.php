<?php

$server = "mysql";
$username = "root";
$password = "tiger";
$database = "docker";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
