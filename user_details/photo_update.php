<?php 
session_start();
require '../db.php';

$photo = $_FILES['photo'];
$id = $_POST['id'];



$after_explode = explode('.',$photo['name']);
$extension = end($after_explode);
$allowed_ext = array('jpeg','jpg','png','gif','jfif','webp');


if(in_array($extension,$allowed_ext)){
    if($photo['size'] <= 4000000){
        $file_name = $id. '.' .$extension;
        $new_location = '../uploads/users/'. $file_name;
        move_uploaded_file($photo['tmp_name'],$new_location);

        $update = "UPDATE manage SET img = '$file_name' WHERE id = $id";
        mysqli_query($db_connection,$update);
        header('location:../dashboard.php');
    }
    else{
        $_SESSION['error'] = "File Size is Too Large ! Max file Size is 3 Mb";
        header('location:profile.php');
    }
}else{
    $_SESSION['error'] = "Invalid Image Extension !";
    header('location:profile.php');
}






































?>