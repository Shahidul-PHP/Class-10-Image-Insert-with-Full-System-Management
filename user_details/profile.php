<?php
session_start();
require '../db.php';
require '../dashboard_parts/header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Update</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Update Profile</h3>
                    </div>
                    <div class="card-body">
                        <form action="profile_post.php" method="POST">
                            <div class="mb-3">
                                <input value="<?= $after_assoc['id'] ?>" class="form-control" type="hidden" name="id" id="">

                                <input value="<?= $after_assoc['name'] ?>" class="form-control" type="text" name="name" id="">
                            </div>
                            <div class="mb-3">
                                <input value="<?= $after_assoc['email'] ?>" class="form-control" type="text" name="email" id="">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="password" name="password" placeholder="Update Password" id="">

                                <?php if (isset($_SESSION['passError'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['passError'] ?></p>
                                <?php }
                                unset($_SESSION['passError']) ?>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update Information</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Upload Your Profile Picture</h5>
                    </div>
                    <div class="card-body">
                        <form action="photo_update.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="file" name="photo" class="form-control">
                            </div>

                            <div class="mb-3">
                                <input value="<?= $after_assoc['id'] ?>" class="form-control" type="hidden" name="id" id="">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-info">Upload Profile</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if (isset($_SESSION['error'])) { ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: '<?= $_SESSION['error'] ?>',
                showConfirmButton: false,
                timer: 2800
            })
        </script>
    <?php  }
    unset($_SESSION['error']) ?>

</body>
</html>























<?php require '../dashboard_parts/footer.php' ?>