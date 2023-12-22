 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <?php include 'nav.php'; ?>
    <style>
 h1, h2, p {
    margin: 0;
    padding: 0;
}
header {
    background-color:#3498db;
    color: #fff;
    text-align: center;
    padding: 20px;
}
.cok{
    background-color:white;
    margin: 0px 0px 0px 0px;
    padding: 0px 0px 0px 0px;
}




main {
    padding: 50px;
}

.about-section {
    margin-bottom: 20px;
    border: 5px solid #ccc;
    padding: 30px;
    font-size: 35px;
    line-height: 1.5;
    text-align: justify;
}
.imag{
    display:block;
    margin-left: auto;
    margin-right:auto;
    margin-bottom: 30px;
    width: 60%;
}
.imag:hover{
    
    transform: scale(1.1)
}
.map {
    font-size: 20px;
    color: #000;
    margin-bottom: 25px;
    position: relative;
 
   
}
iframe{
    filter:invert(100%);
}
.cont{
    width: 45%;
    float: right;
}   
.co{
    font-size: 25px;
}
.map1{
    width: 55%;
    float: left;
}
.contact, .contact-form {
    margin: 20px 0;
    transition: transform 0.3s; /* Transition for interactive elements */
}

.contact{
    width: 40%;
    float: right;
}
    </style>
</head>

<body class="cok">
    <header>
        <h1>About Us</h1>
    </header>
   
    <main>
        <section class="about-section">
            <h2>About Access America</h2>
            <p>The English Access Microscholarship Program (Access) provides a foundation of English language skills to bright, economically disadvantaged students, primarily between the ages of 13 to 20, in their home countries. Access programs give participants English skills that may lead to better jobs and educational prospects. Participants also gain the ability to compete for and participate in future exchanges and study in the United States.</p>
        </section>

        <section class="about-section">
            <h2>Eligibility and Application Overview</h2>
            <p>Participants are 13-20 year-old non-U.S. students.

                Programs occur in over 80 countries and students are recruited in specific locations where Access classes are taking place. Contact your U.S. Embassy to find out if there are Access classes in your area.</p>
        </section>

        <section class="about-section">
            <h2>Objectives</h2>
            <p>The principal objective of Access is to change the life of the students, improving their social skills and leadership. It develops social awareness about the country's problems, and how they can solve them as well. Although learning a new language can be difficult, Access tries to improve the system of learning and makes it part of the student's life, not as an obligation.
                <br><br>
                    The English Access Microscholarship Program (Access) provides a foundation of English language skills to bright, economically disadvantaged students, primarily between the ages of 13 and 20, in their home countries. Access programs give participants English skills that may lead to better jobs and educational prospects. Participants also gain the ability to compete for and participate in future exchanges and study in the United States.
                <br><br>
                 Since its inception in 2004, approximately 150,000 students in more than 80 countries have participated in the Access Program.</p>
        </section>
        <section class="about-section">
            <h2>Who can apply</h2>
            <p>Students with an excellent academic record who:</p>
            <uls>
                <li>Are you 13 to 18 years old</li>
                <li>Live in the areas where the program exists</li>    
                <li>Show leadership skills</li> 
                <li>Are interested in learning English</li> 
                <li>Have little to no knowledge of English language</li> 
                <li>Can provide supports to a low socioeconomic status</li> 
           </ul>
           <br>
           <br>
            <div class="imag">
                <img src="images/access.jpg"  >
            </div>
        </section>
        <section>
            <div class="map">
                <h1 class="map1">Embed Location Map</h1>
                <h1 class="cont">Contact Us</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.996095248354!2d79.38333427417523!3d10.963666755713879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a55337f1ce17aa5%3A0xb5ee193422b5ca2e!2sSastra%20University%20Srinivasa%20Ramanujan%20Center%2C%20Kumbakonam!5e0!3m2!1sen!2sin!4v1697305666812!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="contact">
                <address  class="co">
                    <p>Office of Admissions:</p><br>    
                    <p>SASTRA DEEMED UNIVERSITY</p><br>
                    <p>Srinivasa Ramanujan Centre</p><br>
                    <p>Kumbakonam - 612001.</p><br>
                    <p>Tamilnadu, India.</p><br>
                    <p>0435-2426823</p><br>
                    <p>email: srcadmissions@sastra.edu</p><br>
                </address>
            </div>
        </section>
    </main>
    
</body>
</html>
