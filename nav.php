<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        nav {
    text-align: left;
    font-size: 25px;
    position: sticky;

  }
  
  /* Style for the list items (menu items) */
  nav ul {
    list-style: none; /* Remove bullet points */
    padding: 0; /* Remove default padding */
    position: sticky;
    
  }
  
  nav li {
    display: inline; /* Display menu items horizontally */
    margin: 0 15px; /* Add spacing between items */
    position: sticky;
  }
  
  /* Style for the links */
  nav a {
    text-decoration: none; /* Remove underlines */
    color: #050404; /* Text color */
    font-weight: bold; /* Make the text bold */
    transition: transform .2s;
    position: sticky;
  }
  
  /* Change link color on hover */
  nav a:hover {
    color: #ec27ecd7; /* New text color on hover */
    transform: scale(1.5);
   
  }
  .account{
    margin-left: 450px;
    
  }
  
  
/* nav ends*/
    </style>
</head>
<body>
<nav>
        <ul>
          <li><a href="home.php"><img src="images/logo1.png" width="5%" height="1%"></a></li>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <!--<li><a href="construction.html">Activity</a></li>-->
          <li><a href="faculty.php">Faculty</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="refreshment.php">Refreshments</a></li>
          <li class="account"><a href="account.html">Account<img src="images/account.png" width="1%" height="=1%"></a></li>
        </ul>
      </nav>
    
</body>
</html>