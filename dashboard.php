<?php
session_start();
require 'db.php';
require 'login_req.php';
?>

<?php require 'dashboard_parts/header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        img {
            border-radius: 50%;
            width: 110px;
            height: 110px;
        }

        .fa-pen {
            position: absolute;
            left: 18%;
            top: 32%;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="">
                    <div class="mt-3 mb-3">
                        <img src="uploads/users/<?= $after_assoc['img'] ?>" alt="">                      
                        <h2 class="mt-4">Welcome To Dashboard , <strong><?= $after_assoc['name'] ?></strong></h2>
                    </div>
                    <div class="mt-5 text-justify">
                        <p>This is Your PIXIMA Dashboard. you can edit and Delete your information. also you can upload your profile picture.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>



<?php require 'dashboard_parts/footer.php' ?>