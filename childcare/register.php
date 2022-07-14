<!Doctype html>
<html lang= "en">
    <head>
        <meta charset="utf-8"/>
        <title> Register </title>
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
$con = mysqli_connect("localhost", "root","", "childcare");
if(!$con){
    echo "Connection not made".mysqli_connect_error();
}
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $pname = $_POST['parent'];
    $cname = $_POST['child'];
    $category = $_POST['category'];
    $length = $_POST['length'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $uppercase = preg_match('@[A-Z]@', $pwd);
    $lowercase = preg_match('@[a-z]@', $pwd);
    $number    = preg_match('@[0-9]@', $pwd);
    $specialchars = preg_match('@[^\w]@', $pwd);
    
    $hpwd=password_hash($pwd,PASSWORD_DEFAULT);
    
    $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
    if(!$uppercase || !$lowercase || !$number || !$specialchars || strlen($pwd) < 8) {
        echo '<h3>Password is not Strong</h3>';
        echo "<button><a href = 'Registration.html'> Back </a></button> ";
      }if(empty($pname)||empty($cname)||empty($category)||empty($length)||empty($email)||!preg_match($regex, $email)||empty($pwd)){
        echo "<h3>Please enter all fields correctly</h3>";
        echo "<button><a href = 'Registration.html'> Back </a></button> ";
    }else{
        $query = "INSERT INTO parents (pname, cname, category, length, email, password) VALUES ('$pname','$cname','$category','$length','$email','$hpwd')";
        $check = "SELECT email FROM parents WHERE email = '$email'";
        $resCheck = mysqli_query($con, $check);
        $count = mysqli_num_rows($resCheck);
        if($count > 0){
            echo "<h3>Account already exists, please login.</h3><br>";
            echo "<button><a href = 'LogIn.html'> Login </a></button> ";
        }else{
        $result = mysqli_query($con, $query);
        if($result){
            echo "<h3>Registered Successfully, Please login</h3>";
            echo "<button><a href = 'LogIn.html'> Login </a></button> ";
        }else{
            echo "<h3>Registered Unsuccessfully, Please try again</h3>";
            echo "<button><a href = 'Registeration.html'> Register </a></button> ";
        }
        }
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