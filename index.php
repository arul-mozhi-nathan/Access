<?php
    include("login.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Access</title>
  <style>
    *, *::before, *::after {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

:root {
  --primary-light-hsl: 200, 100%, 91%;
  --primary-hsl: 200, 100%, 50%;
  --primary-dark-hsl: 200, 100%, 6%;
  --success-hsl: 100, 60%, 50%;
  --error-hsl: 0, 60%, 50%;
}

body {
  margin: 0;
}

.full-screen-container {
  background-image: url("back.jpg");
  height: 100vh;
  width: 100vw;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
}

.login-container {
  --color: hsl(var(--primary-dark-hsl), .7);
  background-color: var(--color);
  box-shadow: 0 0 15px 0 var(--color);
  padding: 40px 30px;
  width: 80%;
  max-width: 600px;
  border-radius: 20px;
}

.login-title {
  margin: 0;
  color: white;
  text-align: center;
  font-size: 2rem;
  font-weight: normal;
}

.form {
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin-top: 40px;
}

.input-group {
  display: flex;
  flex-direction: column;
  gap: 7px;
}

.input-group label {
  color: white;
  font-weight: lighter;
}

.input-group input {
  font-size: 1.25rem;
  padding: .5em;
  background-color: hsl(var(--primary-light-hsl), .3);
  border: none;
  outline: none;
  border-radius: .25em;
  color: white;
  font-weight: lighter;
}

.input-group.success input {
  box-shadow: 0 0 0 1px hsl(var(--success-hsl));
}

.input-group.error input {
  box-shadow: 0 0 0 1px hsl(var(--error-hsl));
}

.input-group input:focus {
  box-shadow: 0 0 0 1px hsl(var(--primary-hsl));
}

.input-group .msg {
  display: none;
  font-size: .75rem;
}

.input-group.success .msg,
.input-group.error .msg {
  display: block;
}

.input-group.error .msg {
  color: hsl(var(--error-hsl));
}

.input-group.success .msg {
  color: hsl(var(--success-hsl));
}

.login-button {
  padding: .5em 1em;
  font-size: 1.5rem;
  font-weight: lighter;
  color: white;
  background-color: hsl(var(--primary-hsl), .25);
  border: 1px solid hsl(var(--primary-hsl));
  border-radius: .25em;
  outline: none;
  cursor: pointer;
}

.login-button:hover,
.login-button:focus {
  background-color: hsl(var(--primary-hsl), .4);
}


  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const introVideo = document.getElementById('video');
      const content = document.getElementById('full-screen-container');
      introVideo.addEventListener('start', function(){
        content.style.display = 'none';
      })
      introVideo.addEventListener('ended', function() {
          // When the intro video ends, hide the video and show the content.
          introVideo.style.display = 'none';
          content.style.display = 'block';
      });
  });
  </script>
</head>
<body>
  <video id="video" width="100%" autoplay muted playsinline>
		<source src="images/logo.mp4" type="video/mp4">
        </video>
 <div class="full-screen-container">
    <div class="login-container">
      <h1 class="login-title">Here you go...</h1>
      <form class="form" method="POST">
        <div class="input-group success">
         <!-- <label for="username">Username</label>
          <input type="text" name="username" id="username">-->
          <label for="registerno">RegisterNo.</label>
          <input type="text" name="username" id="username">
     
        </div>

       <!-- <div class="input-group error">
          <label for="password">Password</label>
          <input type="password" name="password" id="password">
         
        </div>-->

        <button type="submit" class="login-button" value="login">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
