<?php
$host = "localhost";
$user_name = "root";
$pass = "";
$db_name = "BTDoc";

$conn = mysqli_connect($host,$user_name,$pass,$db_name);
if (! $conn)
    die ("Connection can't establish.");
?>