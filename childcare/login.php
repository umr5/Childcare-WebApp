<?php
$con = mysqli_connect("localhost", "root","", "childcare");
if(!$con){
    echo "Connection not made".mysqli_connect_error();
}
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login'])){
    $email = $_POST['email'];
    $status = $_POST['status'];
    $pwd = $_POST['pwd'];
    $hpwd=password_hash($pwd,PASSWORD_DEFAULT);
    if($status == "Admin"){
        $query="SELECT email,password FROM admins WHERE email= ?";
        $stmt=mysqli_prepare($con,$query);
        @mysqli_stmt_bind_param($stmt,"s",$email);
        if(@mysqli_stmt_execute($stmt)){
            $row=mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt,$email,$pwd);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($pwd, $hpwd)){
                        session_start();
                        $_SESSION['role'] = "Admin";
                        $_SESSION['loggedin'] = true;
                        header('Location:profile.php');
                    }else{
                        echo "incorret login details";
                    }
                }
            }else{
                header('Location:Registration.html');
            }
        }
    }else{
        $query="SELECT email,password FROM parents WHERE email= ?";
        $stmt=mysqli_prepare($con,$query);
        @mysqli_stmt_bind_param($stmt,"s",$email);
        if(@mysqli_stmt_execute($stmt)){
            $row=mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt,$email,$hpwd);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($pwd, $hpwd)){
                        session_start();
                        $_SESSION['role'] = "Member";
                        $_SESSION['loggedin'] = true;
                        echo "success".$_SESSION['email'];
                        header('Location:profile.php');
                    }else{
                        echo "incorret login details";
                    }
                }
            }else{
                header('Location:Registration.html');
            }
            
        }
    }
}

?>