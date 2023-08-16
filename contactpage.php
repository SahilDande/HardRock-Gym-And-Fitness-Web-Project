<html>
<title>HardRock Gym & Fitness</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
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

$server_name="localhost";
$username= "root";
$password="";
$database_name="contact_database";


$conn =mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$category=$_POST['category'];
$message=$_POST['message'];

$sql_query = "INSERT INTO join_gym (name,email,address,category,message)
VALUES ('$name','$email','$address','$category','$message')";

if(mysqli_query($conn, $sql_query))
{ 
echo "Your Form Has Been Submitted Successfully, Thank You ! ! !";
}
else{
echo "Error: " .$sql. "" .mysqli_error($conn);
}
mysqli_close($conn);
}

?>

<section class="blacksection">

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
        <a href="Contact.html">Contact</a>
        <a href="contact_tbl1.php">Form1 Details</a>
        <a href="contact_tbl2.php" class="space">Form2 Details</a>
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
<html>