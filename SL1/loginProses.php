<?php
    session_start();
    if(isset($_POST['submit'])){
        if($_POST['username'] == $_SESSION['username'] && ($_POST['password'] == $_SESSION['password1'] || $POST_['password'] == $_SESSION['password2'])){
            header("location:home.php");
        }
        else{
            header("location:login.php");
        }
    }
?>