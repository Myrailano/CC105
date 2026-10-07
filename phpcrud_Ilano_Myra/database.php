<?php

$conn = new mysqli('localhost', 'root', '', 'phpcrud_ilano_myra');

if ($conn->connect_error)  {
    die("Connection failed: " . $conn->connect_error);
}
?>