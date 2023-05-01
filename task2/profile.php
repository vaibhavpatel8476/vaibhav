<?php
session_start();

if(!isset($_SESSION['p_name'])){
    header("Location: http://localhost/vaibhav/task2/index.php");
}

if(isset($_POST['name'])){
    $_SESSION['p_name']=$_POST['name'];
}
if(isset($_POST['email'])){
    $_SESSION['p_email']=$_POST['email'];

}
if(isset($_POST['phone_number'])){
    $_SESSION['p_phone_number']=$_POST['phone_number'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>

<a href="http://localhost/vaibhav/task2/logout.php"><input type="button" value="logout" ></a></input>
<br>
    <?php

    if(isset($_SESSION["p_name"])){
        echo "name is  ".$_SESSION["p_name"].'<br>';
    }
    if(isset($_SESSION["p_email"])){
        echo "email is  ".$_SESSION["p_email"].'<br>';
    }
    if(isset($_SESSION["p_phone_number"])){
        echo "phone number is  ".$_SESSION["p_phone_number"].'<br>';
    }
    
    
    echo session_id();
    
   
    ?>
</body>
</html>