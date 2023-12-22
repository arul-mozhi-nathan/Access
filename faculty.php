<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {

    background-color:white;
}
header {
    background-color:#3498db;
    color: #fff;
    text-align: center;
    padding: 4px;
}
.faculty-corner {
    display: flex;
    display: grid;
    gap:2rem;
    justify-content: space-around;
    max-width: 1350px;
    font-family: Arial, sans-serif;
  
    
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 50px;    background-color:white;
}

.faculty-card {
    background-color:rgb(219, 247, 248);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 20px;
    width: 500px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.faculty-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.img1 {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin: 0 auto 10px;
    display: block;
}

h2 {
    font-size: 24px;
    margin: 0;
}

p {
    margin: 10px 0;
}

    </style>
    <title>Faculty Corner</title>
</head>

<br>
<br>
<body>
    <header>
        <h1>Faculty</h1>
    </header>

    <div class="faculty-corner">
        <div class="faculty-card">
            <img class="img1" src="images/ravi.jpg" alt="Faculty 1">
            <h2>Dr.RAVI R<br>(co-ordinator)</h2>
            <p>Department: English</p>
            <p>Position:Asst. Professor - 3</p>
            <p>Email: kshma2810@src.sastra.edu</p>
        </div>
        <div class="faculty-card">
            <img class="img1" src="images/loki.jpg" alt="Faculty 2">
            <h2>Dr.LOGANAYAKI G</h2>
            <p>Department:English</p>
            <p>Position:Asst. Professor - 1 </p>
            <p>Email: loganaayaki@src.sastra.edu</p>
        </div>
        <div  class="faculty-card">
            <img class="img1" src="images/siva.jpg" alt="Faculty 3">
            <h2>Prof.SIVAVIDHYA M</h2>
            <p>Department:English</p>
            <p>Position:Asst. Professor - 1</p>
            <p>Email: sivavidhya@src.sastra..edu</p>
        </div>
        <div class="faculty-card">
            <img class="img1" src="images/durga.jpg" alt="Faculty 4">
            <h2>DURGA R</h2>
            <p>Department:English</p>
            <p>Position: Asst.Professor</p>
            <p>Email: durga@src.sastra.edu</p>
        </div>
        <div class="faculty-card">
            <img class="img1" src="images/pooja.png" alt="Faculty 5">
            <h2>Pooja</h2>
            <p>Department:English</p>
            <p>Position:School Teacher</p>
            <p>Email: pooja@university.edu</p>
        </div>
    </div>
</body>
</html>
