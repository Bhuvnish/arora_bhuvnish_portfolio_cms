
   


   <?php
session_start(); 


require_once('../includes/connect.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // username and password
    $expected_username = 'bhuvnish';
    $expected_password = 'arora';

    // Retrieve the submitted username and password
    $submitted_username = $_POST['username'];
    $submitted_password = $_POST['password'];

    
    if ($submitted_username === $expected_username && $submitted_password === $expected_password) {
      
        $_SESSION['username'] = $submitted_username;

        // Redirect to project_list.php
        header('Location: project_list.php');
        exit();
    } else {
        // Authentication failed, redirect back to the login form
        header('Location: login_form.php');
        exit();
    }
}


header('Location: login_form.php');
exit();
?>