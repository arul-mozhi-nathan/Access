<!--
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "database2");

  if (isset($_POST['upload'])) {
    // Get image name
   // $file = $_FILES['file']['name'];
    // Get text
    $chat = mysqli_real_escape_string($db, $_POST['chat']);

    // image file directory
   // $target = "downloads/"($chat);

    $sql = "INSERT INTO chats (chat) VALUES ('$chat')";
    // execute query
    mysqli_query($db, $sql);

    //if (move_uploaded_file(['chat'], $target)) {
   //         $msg = "Image uploaded successfully";
//}else{
   //         $msg = "Failed to upload image";
   // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Chat</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.chat-container {
    max-width: 400px;
    margin: 50 auto;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.chat-messages {
    max-height: 300px;
    overflow-y: auto;
    border-bottom: 1px solid #ccc;
    padding: 10px;
}

.chat-input {
    display: flex;
    margin-top: 10px;
}

input[type="text"] {
    flex: 1;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    margin-left: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}


    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-messages" id="chat-messages">
             Chat messages will be displayed here 
            <form method="POST" action="chatout.php" ></form>
        </div>
        <div class="chat-input">
            <input type="text" name="chat" id="chat" placeholder="Type your message...">
        </div>
        <div class="send">
            <button type="submit" name="upload" id="upload">send</button>
        </div>
            </form>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const chatMessages = document.getElementById('chat-messages');
    const messageInput = document.getElementById('message-input');
    const sendButton = document.getElementById('send-button');
    const socket = new WebSocket('ws://your-server-address'); // Replace with your server address

    // Handle incoming messages
    socket.addEventListener('message', function(event) {
        const message = event.data;
        const messageElement = document.createElement('div');
        messageElement.innerText = message;
        chatMessages.appendChild(messageElement);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    });

    // Handle sending messages
    sendButton.addEventListener('click', function() {
        const message = messageInput.value;
        if (message) {
            socket.send(message);
            messageInput.value = '';
        }
    });
});

</script>
</body>
</html>-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["text"])) {
    $uploadedText = $_POST["text"];

    // Define a file path to store the text
    $file = "stored_text.txt";

    // Open the file for writing
    $fileHandle = fopen($file, "w");

    if ($fileHandle) {
        // Write the text to the file
        fwrite($fileHandle, $uploadedText);

        // Close the file
        fclose($fileHandle);

      //  echo "Text has been stored successfully.";
    } else {
      //  echo "Failed to open the file for writing.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chats</title>
    <style>
        h1{
            text-align: center;
            color: #3498db;
            font-size: 60px;
        }
        .php{
            border : 2px solid #ccc;
            padding-top: 10px;
            padding-left: 10px;
            font-size: 30px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        </style>
</head>
<body>
    <h1>Attention Students</h1>
    <br>
    <br>
    <div class="php">
    <?php
    // Read and display the stored text from the file
    $storedText = file_get_contents("stored_text.txt");
    echo "<p>" . htmlspecialchars($storedText) . "</p";
    ?>
    </div>

</body>
</html>




