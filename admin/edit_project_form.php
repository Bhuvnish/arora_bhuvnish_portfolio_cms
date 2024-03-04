<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>
<body>
<?php
require_once('../includes/connect.php');
$query = 'SELECT * FROM projects WHERE id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<form action="edit_project.php" method="POST">
    <input name="pk" type="hidden" value="<?php echo $row['id']; ?>">
    <label for="title">Project Title: </label>
    <input name="title" type="text" value="<?php echo $row['title']; ?>" required><br><br>
    <label for="thumb">Project Thumbnail: </label>
    <input name="thumb" type="text" value="<?php echo $row['image_url']; ?>" required><br><br>
   
    <label for="objective">Project Objective: </label>
    <textarea name="objective" required><?php echo $row['objective']; ?></textarea><br><br>
    <label for="execution">Execution: </label>
    <textarea name="execution" required><?php echo $row['execution']; ?></textarea><br><br>
    <label for="conclusion">Conclusion: </label>
    <textarea name="conclusion" required><?php echo $row['conclusion']; ?></textarea><br><br>
    <input name="submit" type="submit" value="Edit">
</form>
<?php
$stmt = null;
?>
</body>
</html>
