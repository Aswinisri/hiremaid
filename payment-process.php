<?php
     
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mhmsdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
$user_id =  '1';
 $data = [ 
         'payment_id' => $_POST['razorpay_payment_id'],
         'amount' => $_POST['totalAmount'],
         'product_id' => $_POST['product_id'],
        ];
 
      
// Define the SQL query to insert data into the orders table
$sql = "INSERT INTO payment_orders (user_id, payment_id, amount, product_id) VALUES (?, ?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind the parameters and execute the query
$stmt->bind_param("ssss", $user_id, $data['payment_id'], $data['amount'], $data['product_id']);

if ($stmt->execute()) {
    $arr = array('msg' => 'Payment successfully credited', 'status' => true);
    echo json_encode($arr);
} else {
    $arr = array('msg' => 'Error: Unable to insert data into the database', 'status' => false);
    echo json_encode($arr);
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>