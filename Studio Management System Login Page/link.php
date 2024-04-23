<?php
/*
$servername = 'localhost';
$username = 'richard';
$password = 'gak';
$dbname = 'studio_db';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die('connection failed :' .$conn->$connect_error);
}
echo "";*/
?>

<?php

$servername = 'localhost';
$username = 'richard'; // Replace with your actual database username
$password = 'gak'; // Replace with your actual database password
$dbname = 'studio_db';

// Improved error handling and security:
try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Connection successful, proceed with database operations
    //echo "Connected to the database successfully!";

} catch (mysqli_sql_exception $e) {
   // echo "Connection failed: " . $e->getMessage();

    // Optional: Log the error for further troubleshooting
    error_log("MySQL connection error: " . $e->getMessage());
} finally {
    // Close the connection if it was established (improves resource management)
    if (isset($conn)) {
        $conn->close();
    }
}

?>
