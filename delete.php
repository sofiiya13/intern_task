<?php
$conn = mysqli_connect("localhost", "root", "", "your_db");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM users WHERE id=$id");

header("Location: users.php");
?>