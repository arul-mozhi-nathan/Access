<!DOCTYPE html>
<html lang="en">
<head>
    <title>Refreshment</title>
    <style>
        *{
   /* margin: 0;
    padding:0;*/
   /* font-family: Arial, Helvetica, sans-serif;*/
    place-items: center;
}
.head{
    font-size: 60px;
    background-color:black;
    text-align: center;
    color: #fff;
    mix-blend-mode: multiply;
    
}

body{
    background-color: aliceblue;
}
table{
    width: 100%;
    box-shadow: -1px 12px 12px -6px rgba(0,0,0,0.5);
    margin-right:auto;
    margin-left:auto;
    
}
table,td,th{
    padding: 35px;
    border: 1px solid lightcyan;
    border-collapse: collapse;
    text-align: center;
  
}
td{
   font-size: 20px;
    
}
th{
    background-color: deepskyblue;
    color: navy;
    cursor: pointer;
    font-size: 30px;

}
tr:nth-child(odd){
    background-color:gainsboro;
}
tr:nth-child(odd):hover{
    background-color:white;
    color: black;
    
}
tr:nth-child(even){
    background-color:gainsboro;
}
tr:nth-child(even):hover{
    background-color:white;
    color:black;
    
}
.sai1{
    width: 50%;
    float:left;
}
.sai2{
    width: 50%;
    float:left;
}
.sai3{
    width: 50%;
    float:left;
}
.sai4{
    width: 50%;
    float:left;
}.sai5{
    width: 50%;
    float:left;
}
.sai6{
    width: 50%;
    float:left;
}
.sai7{
    width: 50%;
    float:left;
}
.sai8{
    width: 50%;
    float:left;
}
.sai9{
    width: 50%;
    float:left;
}
.sai10{
    width: 50%;
    float:left;
}
.box{
    margin-left: 100px;
    margin-right: 100px;
}
.box h1{
    font-size: 34px;
}
.box ul,li{
    font-size: 26px;
}
.img1{
    width: 300px;
  height: 200px;
  position: relative;
  top:30px;
}
.img2{
    width: 300px;
    height: 200px;
  
}
.img3{
    width: 300px;
  height: 200px;
}
.img4{
    width: 300px;
  height: 200px;
}
.img5{
    width: 300px;
  height: 200px;
}
.img6{
    width: 300px;
  height: 200px;
}
.img7{
    width: 300px;
  height: 200px;
}
.img8{
    width: 300px;
  height: 200px;
}
.img9{
    width: 300px;
  height: 200px;
}
.img10{
    width: 300px;
  height: 200px;
}
.box1 {
     border:2px solid black;
     padding: 30px;
     background-color:aquamarine;
     transition: transform 0.3s;
}
.box1:hover{
    transform: scale(1.05);
}
.box2 {
    border:2px solid black;
    padding: 30px;
    background-color:aquamarine;
    transition: transform 0.3s;
}
.box2:hover{
    transform: scale(1.05);
}
.box3 {
    border:2px solid black;
    padding: 30px;
    background-color:aquamarine;
    transition: transform 0.3s;
}
.box3:hover{
    transform: scale(1.05);
}
.box4 {
    border:2px solid black;
    padding: 30px;
    background-color:aquamarine;
    transition: transform 0.3s;
}
.box4:hover{
    transform: scale(1.05);
}
.box5 {
    border:2px solid black;
    padding: 30px;
    background-color:aquamarine;
    transition: transform 0.3s;
}
.box5:hover{
    transform: scale(1.05);
}
.box6 {
    border:2px solid black;
    padding: 30px;
    background-color:aquamarine;
    transition: transform 0.3s;
}
.box6:hover{
    transform: scale(1.05);
}
.box7 {
    border:2px solid black;
    padding: 30px;
    background-color:aquamarine;
    transition: transform 0.3s;
}
.box7:hover{
    transform: scale(1.05);
}
.box8 {
    border:2px solid black;
    padding: 30px;
    background-color:aquamarine;
    transition: transform 0.3s;
}
.box8:hover{
    transform: scale(1.05);
}
.box9 {
    border:2px solid black;
    padding: 30px;
    background-color:aquamarine;
    transition: transform 0.3s;
}
.box9:hover{
    transform: scale(1.05);
}
.box10 {
    border:2px solid black;
    padding: 30px;
    background-color:aquamarine;
    transition: transform 0.3s;
}
.box10:hover{
    transform: scale(1.05);
}


    </style>
    </head>
<body>
<?php include 'nav.php'; ?>
   <h1 class="head">Refreshment Menu Items</h1>
    <br>
    <br>
    <table >
        <thead>
        <tr >
            <th><b>Day</b></th>
             <th><b>Timing</b></th>
              <th><b>Refreshment Items</b></th>
        </tr>
    </thead>
    <tbody>
        <tr >
            <td>MONDAY</td>
            <td>5:15PM-5.45PM</td>
            <td>Tea And Vadai</td>
        </tr>
        <tr>
            <td>TUESDAY</td>
            <td>5:15PM-5.45PM</td>
            <td>Coffee And Samosa</td>
        </tr>
        <tr>
            <td>WEDNESDAY</td>
            <td>5:15PM-5.45PM</td>
            <td>Fresh Juice And Chickpeas</td>
        </tr>
        <tr>
            <td>THUSRDAY</td>
            <td>5:15PM-5.45PM</td>
            <td>Tea And Bajji</td>
        </tr>
        <tr>
            <td>FRIDAY</td>
            <td>5:15PM-5.45PM</td>
            <td>Coffee And Bonda</td>
        </tr>
        <tr>
            <td>SATURDAY</td>
            <td>5:15PM-5.45PM</td>
            <td>Badham milk And Pongal</td>
        </tr>
    </tbody>
    </table>
    <br>
    <br>
    <br>
    <div class="box">
    <div class="box1">
    <div class="sai1">
        <h1>Benefits of Tea</h1>
        <ul>
            <li>Tea contains antioxidants</li>
            <li>Tea may reduce your risk of heart attack and stroke</li>    
            <li>Tea may help protect your bones</li> 
            <li>Tea may keep your smile bright</li> 
            <li>Tea may increases focus</li>
        </ul>
    </div>
    <div class="sai11">   
        <img class="img1" src="images/tea.jpg">
    </div>
    </div>
    <br>
    <br>
    <div class="box2">
    <div class="sai2">
        <h1>Benefits of Coffee</h1>
        <ul>
            <li>Coffee can act as pain relief</li>
            <li>Coffee is a great way to get more fibre</li>    
            <li>Coffee decreases the risk of Type 2 Diabetes</li> 
            <li>Coffee decreases the risk of Alzheimer’s and heart disease</li> 
            <li>Coffee may stop the developing of Parkinson’s</li>
        </ul>
    </div>
    <br>
    <br>
    <div class="sai12">
        <img class="img2" src="images/coffe.jpg">
    </div> 
   </div>  
   <br>
   <br>
   <div class="box3">
    <div class="sai3">
        <h1>Benefits of Fresh Juice</h1>
        <ul >
            <li>Boosts Immune System</li>
            <li>Digestion-Friendly</li>    
            <li>Weight Loss</li> 
            <li>Maintains Healthy Skin</li> 
            <li>Heart Health</li>
        </ul>
    </div>
    <div class="sai13">   
        <img class="img3" src="images/juice.jpg">
    </div> 
    </div>
    <br>
    <br> 
    <div class="box4">
    <div class="sai4">
        <h1>Benefits of Eating Vadai</h1>
        <ul >
            <li>High folic acid</li>
            <li>Prevents anaemia</li>    
            <li>Source of protein</li> 
            <li>Increases immunity</li> 
            <li>High fibre content</li>
        </ul>
    </div>
    <div class="sai14">   
        <img class="img4" src="images/vadai.jpg">
    </div>   
    </div>
    <br>
    <br>
    <div class="box5">
    <div class="sai5">
        <h1>Benefits of Eating Samosa</h1>
        <ul >
            <li>High in Protein</li>
            <li>Rich in Vitamins and Minerals</li>    
            <li>Low in Fat</li> 
            <li>Good Source of Fiber</li> 
            <li>Boosts Energy</li>
        </ul>
    </div>
    <div class="sai15">   
        <img class="img5" src="images/samosa.jpg">
    </div>  
    </div>
    <br>
    <br>
    <div class="box6">
    <div class="sai6">
        <h1>Benefits of Eating Bajji</h1>
        <ul >
            <li>Packed With Nutrients</li>
            <li> Contain Antioxidants</li>    
            <li>Naturally Gluten-Free</li> 
            <li>Extremely Versatile</li> 
        </ul>
    </div>
    <div class="sai16"> 
        <img class="img6" src="images/bhajii.jpg">
    </div>
    </div> 
    <br>
    <br>  
    <div class="box7">
    <div class="sai7">
        <h1>Benefits of Eating Pongal</h1>
        <ul >
            <li>Low in Fat</li>
            <li>High in Protein</li>    
            <li>Packed With Nutrients</li> 
            <li>Prevents anaemia</li> 
            <li>Good Source of Fiber</li>
            
        </ul>
    </div>
    <div class="sai17">    
        <img class="img7" src="images/pongal.jpg">
    </div>
    </div>
    <br>
    <br>
    <div class="box8">
        <div class="sai8">
        <h1>Benefits of Eating  Bonda</h1>
        <ul >
            <li>Promotes Vision</li>
            <li>Good Sources Of Short Chain Fatty Acids</li>    
            <li>Promotes Digestion</li> 
            <li>Valued by Ayurveda</li> 
            <li>Natural Moisturizer</li>
        </ul>
    </div>
    <div class="sai18">
        <img class="img8" src="images/bonda.jpg">
    </div>
   </div>
    <br>
    <br>
    <div class="box9">
    <div class="sai9">
        <h1>Benefits of Eating Chickpeas</h1>
        <ul>
            <li>Packed with nutrients</li>
            <li>Rich in plant protein</li> 
            <li>May help you manage your weight</li> 
            <li>May support blood sugar regulation</li>
            <li>May benefit digestion</li>
        </ul>
    </div>
    <div class="sai19">
        <img class="img9" src="images/sundal.jpg">
    </div>
    </div>
    <br>
    <br>
    <div class="box10">
    <div class="sai10">
        <h1>Benefits of Bhadam Milk</h1>
        <ul>
            <li> Enriched almond milk may strengthen your bones</li>
            <li>Enriched almond milk is high in vitamin D</li>    
            <li>It is low in calories</li> 
            <li>Unsweetened almond milk doesn't raise blood sugar</li> 
            <li>It is low in calories</li>
        </ul>
    </div>
    <div class="sai20">
        <img class="img10" src="images/badam.jpg">
    </div>
    </div>
   </div>
</body>
</html>