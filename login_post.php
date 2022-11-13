<?php 
require 'db.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$find = "SELECT COUNT(*) as find FROM manage WHERE email='$email'";
$make_query = mysqli_query($db_connection,$find);
$make_assoc = mysqli_fetch_assoc($make_query);


if($make_assoc['find'] == 1){
    $select_pass = "SELECT * FROM manage WHERE email = '$email'";
    $make_query_pass = mysqli_query($db_connection, $select_pass);
    $make_assoc_pass = mysqli_fetch_assoc($make_query_pass);

    if(password_verify($password,$make_assoc_pass['password'])){
        $_SESSION['login_confirm'] = 'success';
        $_SESSION['id'] = $make_assoc_pass['id'];
        header('location:dashboard.php');

    }else{
        $_SESSION['pass_error'] = "You Entered a Wrong Password";
        header('location:login.php');

    }

    
}else{
    $_SESSION['error'] = "Invalid Email Addres";
    header('location:login.php');
}
