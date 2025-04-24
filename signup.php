<?php
include "UserRegistration.html";
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Encrypt password
    $number = $_POST["number"];

    $sql = "INSERT INTO users (name, email, password, number) VALUES ('$name', '$email', '$password', '$number')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
 }