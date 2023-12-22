
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Home</title>
    <link rel="stylesheet"href="homestyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>
<header>
<!--<video id="video" width="100%" autoplay muted playsinline style="overflow:hidden;">
		<source src="images/logo.mp4" type="video/mp4">
        </video>
</header>-->
<body>
<?php include 'nav.php'; ?>
   <!-- <nav>
        <ul>
          <li><a href="home.php"><img src="images/logo1.png" width="5%" height="1%"></a></li>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="construction.html">Activity</a></li>
          <li><a href="faculty.php">Faculty</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="refreshment.php">Refreshments</a></li>
          <li class="account"><a href="account.html">Account<img src="images/account.png" width="1%" height="=1%"></a></li>
        </ul>
      </nav>-->
    
 
</div>
      <div class="center">
      <img class="us" src="images/us1.png" alt="US Embassy">
    <div class="head" style="bottom: 230px;">
      <h1>Access America</h1>
      <h1>SASTRA University</h1>
      <h1>Kumbakonam</h1>
     </div>
      </div>
    <img class="sastra" src="images/sastra1.png" alt="sastra" style="top: auto;bottom: 620px;">
    
    
    <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="images/17 (19).JPG" style="width:100%">
      </div>
      
      <div class="mySlides fade">
        <img src="images/17 (16).JPG" style="width:100%">
      </div>
      
      <div class="mySlides fade">
        <img src="images/17 (7).jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="images/grp.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="images/grp1.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="images/boys.jpg" style="width:100%">
      </div>
      
      <div class="mySlides fade">
        <img src="images/girls.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="images/17 (25).JPG" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="images/17 (17).JPG" style="width:100%">
      </div>
      </div>
      <br>
      
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span>
      </div>
    
  <div class="foot" style="background: black;">
 
  <footer>
    <div class="footer-content">
        <h3>SASTRA Developer</h3>
        <p>This project is for project Expo. In this Expo we created a webpage for Access Microscholarship program inspired by <a href="sastra.edu">SASTRA website</a></p>
        <ul class="socials">
            <li><a href="https://www.instagram.com/access_sastra/"><i class="fa fa-instagram"></i></a></li>
        
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy; <a href="#">Arul&Sai Developers</a>  </p>
                <div class="footer-menu">
                  <ul class="f-menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="faculty.php">Faculty</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                  </ul>
                </div>
    </div>

</footer>
  </body>


<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

    document.addEventListener('DOMContentLoaded', function() {
      
      const introVideo = document.getElementById('video');
      const content = document.getElementById('content');
      
    
      introVideo.addEventListener('ended', function() {
          // When the intro video ends, hide the video and show the content.
          introVideo.style.display = 'none';
          content.style.display = 'block';
      });
  });

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


</script>
</html> 











