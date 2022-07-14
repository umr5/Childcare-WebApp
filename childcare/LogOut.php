<?php
session_start();
?>
<!Doctype html>
<html lang= "en">
    <head>
        <meta charset="utf-8"/>
        <title> Logout </title>
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
  if($_SESSION['role'] == "Member" || $_SESSION['role'] == "Admin"){
      unset($_SESSION['role']);
      echo "<h2>Successfully logged out.</h2>";
  }else{
      header('Location:Login.html');
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