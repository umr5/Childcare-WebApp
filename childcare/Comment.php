<?php
$con = mysqli_connect("localhost", "root","", "childcare");
if(!$con){
    echo "Connection not made".mysqli_connect_error();
}
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['send'])){
    $servicename = $_POST['sname'];
    $date = $_POST['date'];
    $name =$_POST['name'];
    $message = $_POST['textarea'];
    $query = "INSERT INTO comment(servicename,dategiven,name,message) VALUES ('$servicename','$date','$name','$message')";
    $result = mysqli_query($con,$query);
    if($result){
        header('Location:Testimonial.php');
    }else{
        echo "Failed to send request, Please try again later.";
    }
}
?>