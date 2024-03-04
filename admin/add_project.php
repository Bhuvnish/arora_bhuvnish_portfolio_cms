<?php
require_once('../includes/connect.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if execution is provided, if not, set a default value
    $execution = !empty($_POST['execution']) ? $_POST['execution'] : date('Y-m-d');

    // Assuming you're setting $filename elsewhere in your code

    $query = "INSERT INTO projects (title, description, image_url, execution, objective, conclusion) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
  
    $stmt->bindParam(2, $imageURL, PDO::PARAM_STR);
    $stmt->bindParam(3, $desc, PDO::PARAM_STR);
    $stmt->bindParam(4, $execution, PDO::PARAM_STR);
    $stmt->bindParam(5, $_POST['objective'], PDO::PARAM_STR);
    $stmt->bindParam(6, $_POST['conclusion'], PDO::PARAM_STR);

    $stmt->execute();
    $last_id = $connection->lastInsertId();
    $stmt = null;
    header('Location: project_list.php');
    exit();
} else {
    // If it's not a POST request, redirect back to the form
    header('Location: add_project_form.php');
    exit();
}
?>
