<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Create Account</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="reg/css/montserrat-font.css">
    <link rel="stylesheet" type="text/css" href="reg/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="reg/css/style.css" />
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body class="form-v10">

    <div class="page-content">
        <div class="form-v10-content">
            <form class="form-detail" action="signup_post.php" method="POST">
                <div class="form-left">
                    <h2 class="text-center">PRIXIMA</h2>
                    <h2>Create Account - Basic Things</h2>

                    <div class="form-row">
                        <input type="text" name="name" placeholder="User Name" value="<?= isset($_SESSION['name_value_error']) ? $_SESSION['name_value_error'] : '' ?>">

                        <?php if (isset($_SESSION['nameError'])) { ?>
                            <p class="mt-2 text-danger"><?= $_SESSION['nameError'] ?></p>
                        <?php }
                        unset($_SESSION['nameError']) ?>
                    </div>

                    <div class="form-row">
                        <input value="<?= isset($_SESSION['mail_value_error']) ? $_SESSION['mail_value_error'] : '' ?>" type="text" name="email" placeholder="Email Address">

                        <?php if (isset($_SESSION['mailError'])) { ?>
                            <p class="mt-2 text-danger"><?= $_SESSION['mailError'] ?></p>
                        <?php }
                        unset($_SESSION['mailError']) ?>
                    </div>

                    <div class="form-row">
                        <input type="password" name="password" class="mb-2" placeholder="Password">
                        <?php if (isset($_SESSION['passError'])) { ?>
                            <p class="mt-2 text-danger"><?= $_SESSION['passError'] ?></p>
                        <?php }
                        unset($_SESSION['passError']) ?>
                    </div>
                    <div class="form-row">
                        <p class="mt-4">Already A Memeber ? <strong><a href="login.php">Login Here</a></strong></p>
                    </div>
                </div>

                <div class="form-right">
                    <h2>Additional Information</h2>
                    <div class="form-row">
                        <input type="text" name="street" class="street" id="street" placeholder="Address">
                    </div>

                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="zip" class="zip" id="zip" placeholder="Zip Code">
                        </div>
                        <div class="form-row form-row-2">
                            <select name="City">
                                <option value="place">Place</option>
                                <option value="Street">Street</option>
                                <option value="District">District</option>
                                <option value="City">City</option>
                            </select>
                            <span class="select-btn">
                                <i class="zmdi zmdi-chevron-down"></i>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="code" class="code" id="code" placeholder="Code +">
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-row-last">
                        <button type="submit" class="mb-4 btn btn-warning">Create Account</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

<?php if (isset($_SESSION['confirmation'])) { ?>
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '<?= $_SESSION['confirmation'] ?>',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php }
unset($_SESSION['confirmation']); ?>

<?php
// session code 
unset($_SESSION['name_value_error']);
unset($_SESSION['mail_value_error']);
?>