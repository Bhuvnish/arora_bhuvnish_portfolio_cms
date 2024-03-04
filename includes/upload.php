<?php
// Check if the file upload form was submitted and if the 'uploaded' key is set in $_FILES
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['uploaded'])) {
    // Check if there are no errors during file upload
    if ($_FILES['uploaded']['error'] === UPLOAD_ERR_OK) {
        // Define target directory
        $target_dir = '../images/'; // Adjust the path to point to the existing 'images' folder

        // Define target file path
        $target_file = $target_dir . basename($_FILES['uploaded']['name']);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_file)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error: Failed to move uploaded file.";
        }
    } else {
        // Handle file upload error
        echo "Error code: " . $_FILES['uploaded']['error'];
    }
} else {
    // Handle case where file upload form was not submitted or 'uploaded' key is not set in $_FILES
    echo "Error: No file uploaded.";
}
?>
