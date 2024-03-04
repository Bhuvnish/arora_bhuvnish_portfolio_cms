<?php
// Check if the 'uploaded' key is set in the $_FILES array
if (isset($_FILES['uploaded'])) {
    // Check if there are uploaded files
    if (is_array($_FILES['uploaded']['tmp_name'])) {
        // Loop through each uploaded file
        foreach ($_FILES['uploaded']['tmp_name'] as $key => $tmp_name) {
            // Check if the file was successfully uploaded
            if ($_FILES['uploaded']['error'][$key] === UPLOAD_ERR_OK) {
                // Define target directory
                $target_dir = '../images/';
                
                // Define target file path
                $target_file = $target_dir . basename($_FILES['uploaded']['name'][$key]);
                
                // Move the uploaded file to the target directory
                if (move_uploaded_file($tmp_name, $target_file)) {
                    echo "File " . $key . " uploaded successfully.<br>";
                    echo "Target file path: " . $target_file . "<br>";
                } else {
                    // Handle file move error
                    echo "Error: Failed to move file " . $key . "<br>";
                }
            } else {
                // Handle file upload error
                echo "Error code for file " . $key . ": " . $_FILES['uploaded']['error'][$key] . "<br>";
            }
        }
    } else {
        // Handle case where only one file is uploaded
        $tmp_name = $_FILES['uploaded']['tmp_name'];
        $target_dir = '../images/';
        $target_file = $target_dir . basename($_FILES['uploaded']['name']);
        if (move_uploaded_file($tmp_name, $target_file)) {
            echo "File uploaded successfully.<br>";
            echo "Target file path: " . $target_file . "<br>";
        } else {
            // Handle file move error
            echo "Error: Failed to move file.<br>";
        }
    }
} else {
    // Handle case where 'uploaded' key is not set in $_FILES array
    echo "No files uploaded.<br>";
}
?>

