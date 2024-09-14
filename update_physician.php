<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = intval($_POST['update_id']);
    $phone_number = htmlspecialchars($_POST['update_phone_number']);

    $stmt = $conn->prepare("UPDATE physicians SET phone_number = ? WHERE id = ?");
    $stmt->bind_param("si", $phone_number, $id);

    if ($stmt->execute()) {
        echo "Physician updated successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
