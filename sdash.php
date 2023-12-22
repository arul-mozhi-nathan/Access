<?php
// Establish a database connection (replace with your database credentials)
$mysqli = new mysqli("localhost", "root", "", "database2");

// Check for a successful connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Query to retrieve a name from the database
$sql = "SELECT name FROM student WHERE password = 'arul@123'"; // Adjust the query as needed

// Execute the query
$result = $mysqli->query($sql);

// Check for a valid result
if ($result) {
   $row = $result->fetch_assoc();
    $name = $row['name'];
    //echo "Hello, $name!";
} else {
    echo "Error: " . $mysqli->error;
}

// Close the database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #333;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            overflow: hidden;
        }
        nav li {
            float: left;
        }
        nav a {
            display: block;
            color: #fff;
            text-align: center;
            padding: 15px 20px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #444;
        }
        .container {
            margin: 20px;
        }
        .dashboard-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px #aaa;
        }
        .img1{
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 10px;
             display: block;
        }
        
        .profile{
        
            margin-left: 30%;
            text-align: center;
            font-size: 20px;
            background-color:deepskyblue;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 20px;
    width: 500px;
    transition: transform 0.3s, box-shadow 0.3s;    
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome <?php echo $name ?></h1>
    </header>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="construction.html">Attendance</a></li>
            <li><a href="chat.php">ChatBox</a></li>
            <li><a href="activity.php">Assignment</a></li>

            <li><a href="calendar.html">Calendar</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="dashboard-content">
        <h2>Profile</h2><br>
            <div class="profile">
            <img class="img1" src="images/mypic.jpg" alt="Faculty 1">
           <div class="pic">
            <p>Student Name:Arulmozhinathan A</p>
            <p>Reg.No:224027020</p>
            <p>Email:224027020@sastra.ac.in</p></div></div>
        
            <h2>Upcoming Assignments</h2>
            <ul>
                <li>Assignment 1 - Due Date: mm/dd/yyyy</li>
                <li>Assignment 2 - Due Date: mm/dd/yyyy</li>
      
            </ul>
        </div>
        <div class="dashboard-content">
            <h2>Announcements</h2>
            <p>Important announcement regarding the upcoming exam.</p>
 
        </div>
    </div>
</body>
</html>
