<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $customer_name = $_POST['customer_name'];
    $contact_no    = $_POST['contact_no'];
    $email         = $_POST['email'];
    $house_address = $_POST['house_address'];
    $equipment_id  = $_POST['equipment_id'];
    $order_date    = $_POST['order_date'];  // required

    // Prepared statement to avoid errors + SQL injection
    $stmt = $conn->prepare("
        INSERT INTO orders (customer_name, contact_no, email, house_address, equipment_id, order_date)
        VALUES (?, ?, ?, ?, ?, ?)
    ");

    if (!$stmt) {
        die("SQL Error: " . $conn->error);
    }

    $stmt->bind_param("ssssss",
        $customer_name,
        $contact_no,
        $email,
        $house_address,
        $equipment_id,
        $order_date
    );

    if ($stmt->execute()) {
        header("Location: order_confirmation.html");
        exit();
    } else {
        echo "Insert Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
