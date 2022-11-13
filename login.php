<?php
session_start();
require 'db.php';
?>

<!doctype html>
<html lang="en">

<head>
    <title>User Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="login/css/style.css">
    <style>
        a:hover {
            text-decoration: none;
            color: #fbceb5;
        }
    </style>
</head>

<body class="img " style="background-image: url(login/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container box">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4 mt-0">
                    <h2 class="heading-section">PRIXIMA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account ? </h3>
                        <form action="login_post.php" method="POST" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" name="email">
                                <?php if (isset($_SESSION['error'])) { ?>
                                    <strong class="text-warning"><?= $_SESSION['error'] ?></strong>
                                <?php }
                                unset($_SESSION['error']) ?>
                            </div>
                            <div class="form-group">
                                <input name="password" id="password-field" type="password" class="form-control" placeholder="Password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <?php if (isset($_SESSION['pass_error'])) { ?>
                                    <strong class="text-warning"><?= $_SESSION['pass_error'] ?></strong>
                                <?php }
                                unset($_SESSION['pass_error']) ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Log In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div>
                            <p>New Here ? <strong><a href="signup.php">Create a New Account</a></strong></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="login/js/jquery.min.js"></script>
    <script src="login/js/popper.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>

</body>

</html>