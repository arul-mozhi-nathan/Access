<?php
  
            // Database connection
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "database2"; // Your database name

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query the database to check credentials
    $query = "SELECT * FROM student WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Authentication successful
       
        header("Location:sdash.php");
        echo'
        <script> alert("Login successful! Welcome, $username!")
        </script>';
    } else {
        // Authentication failed
        echo "Login failed. Please check your credentials.";
        echo'<script>
        window.location.href = "student.php";
        
        alert("Login failed. Invalid username or password!!!"); 
     </script>';   
    }
    
}

// Close the database connection
$conn->close();
?>
