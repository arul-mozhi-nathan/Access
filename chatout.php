<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "activity");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
</head>
<body>
<?php
$result = mysqli_query($db, "SELECT * FROM chats");

?>
  <h6> <?php echo htmlspecialchars($chats['chat']); ?></h6>
   
    

    
</body>
</html>