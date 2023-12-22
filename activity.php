<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "activity");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
        // Get image name
        $file = $_FILES['file']['name'];
        // Get text
        $text = mysqli_real_escape_string($db, $_POST['text']);

        // image file directory
        $target = "downloads/".basename($file);

        $sql = "INSERT INTO files (file, text) VALUES ('$file', '$text')";
        // execute query
        mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
        }else{
                $msg = "Failed to upload image";
        }
  }
  $result = mysqli_query($db, "SELECT * FROM files");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
        width: 50%;
        margin: 20px auto;
        border: 1px solid #cbcbcb;
   }
   form{
        width: 50%;
        margin: 20px auto;
   }
   form div{
        margin-top: 5px;
   }
   #img_div{
        width: 80%;
        padding: 5px;
        margin: 15px auto;
        border: 1px solid #cbcbcb;
   }
   #img_div:after{
        content: "";
        display: block;
        clear: both;
   }
   img{
        float: left;
        margin: 5px;
        width: 300px;
        height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
   /* while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='downloads/".$row['file']."' >";
        echo "<p>".$row['text']."</p>";
      echo "</div>";
    }*/
  ?>
  <form method="POST" action="activity.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div>
          <input type="file" name="file">
        </div>
        <div>
      <textarea 
        id="text" 
        cols="40" 
        rows="4" 
        name="text" 
        placeholder="Say something about this image..."></textarea>
        </div>
        <div>
                <button type="submit" name="upload">POST</button>
        </div>
  </form>
</div>
</body>
</html>







<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Activity</title>
    <style>
        p{
            text-align: center;
            font-size: 50px;
        }
        body{
            background: black;
        }
        .file{
            position: relative;
            top: 50%;
            left: 38%;
            margin-top: 200px;
           
        }
        .text{
            position: relative;
            top: 50%;   
            left: 40%;
            margin-top: 200px;
        }
       input{
         display: none;
        }
        label{
            padding: 150px;
            height: 100px;
            width: 150px;
            border-radius: 6px;
            border: 1px dashed #999;
            color: chartreuse;
        }
        label:hover{
            color: #de0611;
            border: 1px dashed #de0611;
        }
    </style>
</head>
<body>
    <p style="color: aliceblue;">Access Students are requested to upload their assingments</p>
    <form  method="post" action="activity.php" enctype="multipart/form-data">
     <div class="file">
        <input type="file" id="files" name="files"/>
        <label for="files">Upload File</label>
    </div>
    <div class="text">
        <textarea name="text" id="text" cols="40" rows="4" placeholder="Mentions:Assingment Name,Date,Day,Name" required></textarea>
    </div>

        <input type="submit" name="upload" value="upload files">
  
    </form>
    
</body>
</html>-->