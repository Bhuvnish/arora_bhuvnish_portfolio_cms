<?php
require_once('../includes/connect.php');

try {
    // Prepare the SQL query
    $query = "UPDATE projects SET title = ?, image_url = ?, description= ?, objective = ?, execution = ?, conclusion = ? WHERE id = ?";
    $stmt = $connection->prepare($query);

    // Bind parameters
    $stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST['image_url'], PDO::PARAM_STR);
    $stmt->bindParam(3, $_POST['description'], PDO::PARAM_STR);
    $stmt->bindParam(4, $_POST['objective'], PDO::PARAM_STR);
    $stmt->bindParam(5, $_POST['execution'], PDO::PARAM_STR);
    $stmt->bindParam(6, $_POST['conclusion'], PDO::PARAM_STR);
    $stmt->bindParam(7, $_POST['pk'], PDO::PARAM_INT);

    // Execute the query
    if ($stmt->execute()) {
        // Redirect to project list page on success
        header('Location: project_list.php');
        exit();
    } else {
        // Display error message on failure
        echo "Error: Unable to update project.";
    }
} catch (PDOException $e) {
    // Display PDOException error message
    echo "Error: " . $e->getMessage();
}
?>
