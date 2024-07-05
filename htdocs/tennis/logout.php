<?php
session_start();
if(isset($_SESSION['id'])){
    unset($_SESSION['id']);
    }
    header('Location:login.php');

    //p282 check test

    //q1 setcookie('name','山田',time()*60*30);
    //q2  $_SESSION
    //q3  session_destroy
?>
