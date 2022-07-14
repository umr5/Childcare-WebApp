<!Doctype html>
<html lang= "en">
    <head>
        <meta charset="utf-8"/>
        <title> Contact Us </title>
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
    <h2> Contact </h2>

    <div class="container">
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       Name: <input type="text" name="name"><br>
       Email: <input type="text" name="email"><br>
       Phone: <input type="text" name="phone"><br>
       <textarea class="form-control" name="textarea" rows="7" cols="50" placeholder="Enter a message"></textarea><br>

       <input type="submit" name="contact" value="Send Message">

      </form>
      
    </div>
    <?php
$con = mysqli_connect("localhost", "root","", "childcare");
if(!$con){
    echo "Connection not made".mysqli_connect_error();
}
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['contact'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone =$_POST['phone'];
    $message = $_POST['textarea'];
    $query = "INSERT INTO contact(name,email,phone,message) VALUES ('$name','$email','$phone','$message')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "Thank you for contacting us, one of our team member will be in touch with you soon.";
    }else{
        echo "Failed to send request, Please try again later.";
    }
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