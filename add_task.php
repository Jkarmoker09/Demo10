<?php
include 'config.php';
$task = $_POST['task'];
$deadline = $_POST['deadline'];
mysqli_query($conn, "INSERT INTO tasks (task_name, deadline, status) VALUES ('$task','$deadline','pending')");
header("Location: dashboard.php");
?>