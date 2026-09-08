<?php
include 'config.php';
$id = $_GET['id'];
mysqli_query($conn, "UPDATE tasks SET status='done' WHERE id=$id");
header("Location: dashboard.php");
?>