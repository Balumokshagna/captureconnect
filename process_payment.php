<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photoshop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the required POST variables are set
if (isset($_POST['razorpay_payment_id']) && isset($_POST['totalAmount'])) {
    $data = [
        'user_id' => '1', // Assuming user ID is always 1 for now
        'payment_id' => $_POST['razorpay_payment_id'],
        'amount' => $_POST['totalAmount'],
    ];

    // Define the SQL query to insert data into the orders table
    $sql = "INSERT INTO orders (user_id, payment_id, amount) VALUES (?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind the parameters and execute the query
        $stmt->bind_param("sss", $data['user_id'], $data['payment_id'], $data['amount']);

        if ($stmt->execute()) {
            $arr = array('msg' => 'Payment successfully credited', 'status' => true);
            echo json_encode($arr);
        } else {
            $arr = array('msg' => 'Error: Unable to insert data into the database', 'status' => false);
            echo json_encode($arr);
        }

        // Close the statement
        $stmt->close();
    } else {
        $arr = array('msg' => 'Error: Unable to prepare SQL statement', 'status' => false);
        echo json_encode($arr);
    }
} else {
    $arr = array('msg' => 'Error: Required POST variables not set', 'status' => false);
    echo json_encode($arr);
}

// Close the database connection
$conn->close();
?>
