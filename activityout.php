<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "activity");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
</head>
<body>
<?php
$result = mysqli_query($db, "SELECT * FROM files");
   while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='downloads/".$row['file']."' >";
        echo "<p>".$row['text']."</p>";
      echo "</div>";
    }
  ?>
</body>
</html>