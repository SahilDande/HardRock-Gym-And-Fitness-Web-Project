<html>
<title>HardRock Gym & Fitness</title>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HardRock Gym & Fitness</title>
        <link rel="stylesheet" href="style1.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">

<style>
footer{
margin-top: 550px;
}
</style>
</head>
<body class="bodyphp">



    <header class="header-about">
        <div class="container">
        <nav class="flex items-center justify-between">
        <div class="left flex items-center">
            <div class="branding">
                <img src="Images/weight-1399281.png" alt="Logo">
            
        </div>
        <div>
            <a href="Home.html">Home</a>
            <a href="About.html">About</a>
            <a href="Services.html">Services</a>
            <a href="Gallery.html">Gallery</a>
            <a href="Blogs.html">Blogs</a>
        </div>
    </div>
        <div class="right">
        <a href="Contact.html"><button class="btn btn-primary">Contact</button></a>
        </div> 
        </nav>
        </div>
        </header>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_database";

$stid= $_REQUEST["record"];
echo $stid;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM gym_trainer WHERE client_id= $stid";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>




<section class="blank">
</section>
<footer>
    <img class="footer-logo" src="Images/weight-1399281.png" alt="Logo">

    <div class="quick-links">
        <div class="quick-heading">
            <h2>Quick <span>Links</span></h2>
        </div>
        <ul>     
        <a href="Home.html">Home</a>
        <a href="About.html">About</a>
        <a href="Services.html">Services</a>
        <a href="Gallery.html">Gallery</a>
        <a href="Blogs.html">Blogs</a>
        <a href="Contact.html" class="space">Contact</a>
    </ul>

    </div>

    <div class="developer-contact">
        <h2>Developer <span>Contact</span></h2>
        <p>Developer Name: Sahil Dande (Govrn. Polytechnic, Washim) 
            <br><br>Developer Contact: Sahildande2019@gmail.com / 8459667601<br><br>
            Developer Address: <br>Civil Line Near Vyas Floor Mill, Washim Maharashtra(444505)</p>
    </div>    
    
        <div class="footer-socials flex items-center justify-center">
            <div class="socials-heading">
            <h2>Social <span>Links</span></h2>
        </div>

        <div class="social-icons">
            <a href="Home.html" target="_blank"> <img id="website" src="Images/website logo.png"
                    alt=""></a>
            <a href="#"><img id="facebook" src="Images/facebook logo.png" alt=""></a>
            <a href="#"><img id="twitter" src="Images/twitter logo.png" alt=""></a>
            <a href="#"><img id="pintrest" src="Images/pintrest logo.png" alt=""></a>
            <a href="http://www.instagram.com/sahildande11" target="_blank"><img id="instagram"
                    src="Images/instagram logo.png" alt=""></a>
        </div>
    </div>
    
        <div class="copyright">Copyright 2021 &copy; www.HardRockFitness.com All Rights Reserved.</div>
</footer>

</body>
</html>





