<?php 
session_start();
require '../db.php';

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];

$upper = preg_match('@[A-Z]@', $password);
$lower = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
$spsl = preg_match('@[#,$,%,^.&,*,\,~,!!,!]@', $password);

$after_hash = password_hash($password,PASSWORD_DEFAULT);

$name = $_POST['name'];
// name
if (empty($name)) {
    $_SESSION['nameError'] = 'Please Enter Your Name';
    header('location:profile.php');

} else {
    if (!preg_match("/^[a-z A-z]*$/", $name)) {
        $_SESSION['nameError'] = 'Only Alphabet is Allowed';
        header('location:profile.php');
    }
}












if(empty($password)){

    $update = "UPDATE manage SET name = '$name', email = '$email' WHERE id = $id";
    $make_query = mysqli_query($db_connection,$update);
    header('location:../dashboard.php');
}else{
    if (!$upper || !$lower || !$number || !$spsl || strlen($password) < 8) {
        $_SESSION['passError'] = 'Password Should be 1 uppercase, 1 lowercase, special character <br> and minumum 8 Character !! ';
        header('location:profile.php');
    }else{
        $update = "UPDATE manage SET name = '$name', email = '$email', password='$after_hash' WHERE id = $id";
        $make_query = mysqli_query($db_connection, $update);
        header('location:../dashboard.php');
    }
  
}














?>