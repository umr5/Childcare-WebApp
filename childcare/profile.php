<?php
session_start();
?>
<!Doctype html>
<html lang= "en">
    <head>
        <meta charset="utf-8"/>
        <title> Profile </title>
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



<section id='second-section-other'>

      <h2> Profile </h2>
      <?php
     if(@$_SESSION['role'] == "Member"){

 echo "<div class='container1'>";

     echo "<h2>Give a Testimonial</h2>";

       echo "<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>";

      echo " <a href='Comment.html'><button>Click Here</button></a>";

echo "</div>";

echo "<div class='container1'>";

   echo "<h2>Check our Services</h2>";

        echo "<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>";

      echo " <a href='Services.html'><button>Click Here</button></a>";

echo "</div>";
     }else if(@$_SESSION['role'] == "Admin") {    

echo "<div class='container1'>";

    echo "<h2> Check Enquiries </h2>";

       echo "<p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>";

        echo "<button> <a href='Enquiries.php'>Click Here</a></button>";

echo "</div>";
     }else{
         header('Location:LogIn.html');
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