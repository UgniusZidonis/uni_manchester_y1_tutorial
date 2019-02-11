<?php
include 'config.inc.php';

$conn = new mysqli($database_host, $database_user, $database_pass, $database_name);

// Check connection
if ($conn->connect_error) {
    echo "Connection failed: ", $conn->connect_error, "\n";
}

$conn->query("DELETE FROM 101_Z7 WHERE 1=1");
$conn->query("INSERT INTO 101_Z7 (`name`, `email`) VALUES ('Ugnius Zidonis', 'zidonis.ugnius@gmail.com')");
$conn->query("INSERT INTO 101_Z7 (`name`, `email`) VALUES ('Maria Faura', 'maria.faura@student.manchester.ac.uk')");
$conn->query("INSERT INTO 101_Z7 (`name`, `email`) VALUES ('Sam Joynson', 'sam.joynson@bangladesh.ru')");
$conn->query("INSERT INTO 101_Z7 (`name`, `email`) VALUES ('Alexandru Tentes', 'alexandru@tentes.ro')");

$conn->close();
?>
