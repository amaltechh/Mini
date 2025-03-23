<?php
// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize user input
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $password = $_POST['password'];

    // Validate input
    if (empty($id) || empty($name) || empty($password)) {
        die("All fields are required.");
    }

    // Simulate a successful operation (replace with actual database interaction)
    echo "Signup successful! Welcome, $name.";
} else {
    // Redirect back if accessed directly
    header("Location: signup.html");
    exit;
}
?>
