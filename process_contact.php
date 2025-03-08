<?php
include 'config.php'; // Panggil koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Validasi input
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Gunakan prepared statement untuk keamanan
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "<script>alert('Message sent successfully!'); window.location.href='index.html#contact';</script>";
        } else {
            echo "<script>alert('Error sending message!'); window.location.href='index.html#contact';</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Please fill in all fields!'); window.location.href='index.html#contact';</script>";
    }
}

$conn->close();
?>