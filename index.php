<?php
// handle_form.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    // Save to database or send email
    echo "Thank you, $name! We have received your details.";
}
?>
