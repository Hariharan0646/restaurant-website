<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $message = $_POST['message'];

    try {
        $sql = "INSERT INTO process_reservation (name, email, phone, date, time, guests, message) 
                VALUES (:name, :email, :phone, :date, :time, :guests, :message)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':date' => $date,
            ':time' => $time,
            ':guests' => $guests,
            ':message' => $message
        ]);

        echo "Reservation submitted successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>