<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    // Display the submitted data
    echo "<div style='font-family: Arial; text-align: center; margin: 20px;'>";
    echo "<h1>Submission Successful</h1>";
    echo "<p><strong>Full Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<a href='index.html'>Go Back</a>";
    echo "</div>";
} else {
    // Redirect to the form page if accessed without POST
    header('Location: index.html');
    exit();
}
?>
