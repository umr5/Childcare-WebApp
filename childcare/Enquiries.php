<?php
session_start();
?>
<!Doctype html>
<html lang= "en">
    <head>
        <meta charset="utf-8"/>
        <title> Enquiries </title>
        <link rel = "styleSheet" href ="Style.css"/>
    </head>

<div>

<body>


<section id="first-section-others">

<nav id="menu">
         <ul>
             <li> <a href= "Index.html" target="_blank"> Home </a> </li>
             <li> <a href= "Registration.html" target="_blank"> Registration </a> </li>
             <li> <a href= "Testimonial.php" target="_blank"> Testimonial </a> </li>
             <li> <a href= "contact.php" target="_blank"> Contact </a> </li>
             <div class="dropdown">
               <li> <a id="dropdown-menu" href="profile.php" target="_blank"> Profile </a> </li>
               <div class="dropdown-content">
                   <a href= "LogIn.html" target="_blank"> LogIn </a> </li>
                   <a href= "LogOut.php"> LogOut </a>
               </div>
            </div>
         </ul>
</nav>

<img src="Media/Logo.png" width="64px" height="64px" alt = "Logo" title = "Logo">

</section>



<section id="second-section-other">

  <?php
  $con = mysqli_connect("localhost","root","","childcare");
  if (!$con){
    echo "Connection not made".mysqli_connect_error();
}
if($_SESSION['role'] == "Admin"){
        
    
 $query = "SELECT * FROM contact";

$result = mysqli_query($con,$query);

 

echo "<table border='1'>

<tr>

<th>Name</th>

<th>Email</th>

<th>Phone</th>

<th>Message</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "<td>" . $row['phone'] . "</td>";

  echo "<td>" . $row['message'] . "</td>";

  echo "</tr>";

  }

echo "</table>";
  
}


?>


  
</section>



<footer id="footer">

<nav id="menu">
         <ul>
             <li> <a href= "Index.html" target="_blank"> Home </a> </li>
             <li> <a href= "Registration.html" target="_blank"> Registration </a> </li>
             <li> <a href= "Testimonial.php" target="_blank"> Testimonial </a> </li>
             <li> <a href= "contact.php" target="_blank"> Contact </a> </li>
             <div class="dropdown">
               <li> <a id="dropdown-menu" href="profile.php" target="_blank"> Profile </a> </li>
               <div class="dropdown-content">
                   <a href= "LogIn.html" target="_blank"> LogIn </a> </li>
                   <a href= "LogOut.php"> LogOut </a>
               </div>
            </div>
         </ul>
</nav>

       <p> <strong> All content rights reserved </strong> </p>

</footer>
</body>
</div>
</html> 