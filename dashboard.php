<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
<h2>Task Manager</h2>

<form action="add_task.php" method="POST">
<input type="text" name="task" placeholder="Enter task">
<input type="datetime-local" name="deadline">
<button type="submit">Add Task</button>
</form>

<table border="1">
<tr><th>Task</th><th>Deadline</th><th>Status</th><th>Action</th></tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM tasks");
while($row = mysqli_fetch_assoc($result)){
$color = ($row['status']=='done') ? "style='background:lightgreen'" : "";
echo "<tr $color>
<td>".$row['task_name']."</td>
<td>".$row['deadline']."</td>
<td>".$row['status']."</td>
<td>
<a href='complete_task.php?id=".$row['id']."'>Complete</a> |
<a href='delete_task.php?id=".$row['id']."'>Delete</a>
</td>
</tr>";
}
?>
</table>
</div>
</body>
</html>