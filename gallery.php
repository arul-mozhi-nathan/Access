<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}
header {
    background-color:#3498db;
    color: #fff;
    text-align: center;
    padding: 5px;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>
<?php include 'nav.php'; ?>
<header>
<h1>Access Gallery</h1>
</header>
<div class="container">
  <div class="mySlides">
    <img src="images/IMG20230626094310.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="images/17 (2).jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="images/17 (7).jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <img src="images/17 (4).jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="images/17 (5).jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <img src="images/17 (28).jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (20).JPG" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (8).jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (9).jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (10).jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (21).JPG" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (11).jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (12).jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (19).JPG" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (18).JPG" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (13).JPG" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (14).JPG" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (15).JPG" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (16).JPG" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (17).JPG" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (27).jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (6).jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (25).JPG" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (24).JPG" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/17 (23).JPG" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/1687960572557.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/20230627_180102.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/1687960571691.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/1687960571850.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/1687960571875.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/1687960571971.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/1687960572377.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/boys.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/grp.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/IMG_20220914_175648.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/IMG_20220914_175713.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/IMG-20220808-WA0055.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/IMG-20230628-WA0156.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="images/IMG20230626094300.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <img src="C:\xampp\htdocs\demo\images\IMG20220914174217.jpg" style="width:100%">
  </div>



    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/IMG20230626094310.jpg" style="width:100%" onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/17 (2).jpg" style="width:100%" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/17 (7).jpg" style="width:100%" onclick="currentSlide(3)">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/17 (4).jpg" style="width:100%" onclick="currentSlide(4)">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/17 (5).jpg" style="width:100%" onclick="currentSlide(5)">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/17 (28).jpg" style="width:100%" onclick="currentSlide(6)">
    </div>
    <div class="column">
        <img class="demo cursor" src="images/17 (20).JPG" style="width:100%" onclick="currentSlide(7)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (8).jpg" style="width:100%" onclick="currentSlide(8)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (9).jpg" style="width:100%" onclick="currentSlide(9)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (10).jpg" style="width:100%" onclick="currentSlide(10)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (21).JPG" style="width:100%" onclick="currentSlide(11)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (11).jpg" style="width:100%" onclick="currentSlide(12)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (12).jpg" style="width:100%" onclick="currentSlide(13)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (19).JPG" style="width:100%" onclick="currentSlide(14)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (18).JPG" style="width:100%" onclick="currentSlide(15)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (13).JPG" style="width:100%" onclick="currentSlide(16)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (14).JPG" style="width:100%" onclick="currentSlide(17)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (15).JPG" style="width:100%" onclick="currentSlide(18)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (16).JPG" style="width:100%" onclick="currentSlide(19)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (17).JPG" style="width:100%" onclick="currentSlide(20)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (27).jpg" style="width:100%" onclick="currentSlide(21)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (6).jpg" style="width:100%" onclick="currentSlide(22)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (25).JPG" style="width:100%" onclick="currentSlide(23)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (24).JPG" style="width:100%" onclick="currentSlide(24)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/17 (23).JPG" style="width:100%" onclick="currentSlide(25)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/1687960572557.jpg" style="width:100%" onclick="currentSlide(26)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/20230627_180102.jpg" style="width:100%" onclick="currentSlide(27)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/1687960571691.jpg" style="width:100%" onclick="currentSlide(28)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/1687960571850.jpg" style="width:100%" onclick="currentSlide(29)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/1687960571875.jpg" style="width:100%" onclick="currentSlide(30)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/1687960571971.jpg" style="width:100%" onclick="currentSlide(31)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/1687960572377.jpg" style="width:100%" onclick="currentSlide(32)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/boys.jpg" style="width:100%" onclick="currentSlide(33)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/grp.jpg" style="width:100%" onclick="currentSlide(34)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/IMG_20220914_175648.jpg" style="width:100%" onclick="currentSlide(35)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/IMG_20220914_175713.jpg" style="width:100%" onclick="currentSlide(36)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/IMG-20220808-WA0055.jpg" style="width:100%" onclick="currentSlide(37)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/IMG-20230628-WA0156.jpg" style="width:100%" onclick="currentSlide(38)">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/IMG20230626094300.jpg" style="width:100%" onclick="currentSlide(39)">
      </div>
      <div class="column">
        <img class="demo cursor" src="C:\xampp\htdocs\demo\images\IMG20220914174217.jpg" style="width:100%" onclick="currentSlide(40)">
      </div>
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>
