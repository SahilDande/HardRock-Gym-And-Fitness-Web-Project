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
  body{
    height:1500px;
  }

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: -1520px;  
background-color: var(--secondary);
color: var(--pure);
}

#customers td, #customers th {
  border: 1px solid var(--light);
  padding: 8px;
}

#customers tr:nth-child(even){background-color: var(--grey);
color: var(--pure);}

#customers tr:hover {background-color: var(--grey);
color : var(--pure);}

#customers tr td:hover{
background-color: grey;
color: var(--pure);
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: var(--secondary);
  color: var(--primary);

}
footer{
margin-top: 650px;
}

button{
margin-left: 500px;
backgorund-color: var(--primary);
border: 2px solid white;
}
.right button:hover{
backgorund-color: black;
color: var(--primary);
border: 2px solid var(--primary);
}
.right{
width: 0px;
}
a button{
margin-left: 280px;
}
.second{
margin-left: -20px;
width: 300px;
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
<a class="second" href="contact_tbl2.php"><button class="btn btn-primary">Form2 Details</button></a> 
        </nav>
        </div>
        </header>

        




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT client_id, name, email, address, category, message FROM join_gym";
$result = $conn->query($sql); ?>


<table id="customers">
<tr>
<th>Client_Id</th>
<th>Client_Name</th>
<th>Email</th>
<th>Address</th>
<th>Fitness_Category</th>
<th>Message</th>
<th>Action</th>
</tr>


<?php

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>

<tr>
<td><?php echo $row["client_id"] ?></td>
<td><?php echo $row["name"] ?></td>
<td><?php echo $row["email"] ?></td>
<td><?php echo $row["address"] ?></td>
<td><?php echo $row["category"] ?></td>
<td><?php echo $row["message"] ?></td> 
<td><a href="delete.php?record=<?php echo $row['client_id']; ?>"> Delete</a></td>
</tr>

<?php
  }
} else {
  echo "0 results";
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