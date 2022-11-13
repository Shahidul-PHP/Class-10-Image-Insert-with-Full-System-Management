<?php
session_start();
require '../db.php';
require '../login_req.php';

$show_user = "SELECT * FROM manage";
$result = mysqli_query($db_connection, $show_user);

echo '<title>User List</title>';
?>

<?php require '../dashboard_parts/header.php'; ?>

<div class="container">
    <div class="col-lg-12 m-auto">
        <div class="card">
            <div class="card-header">
                <h2>Our Hon'able Users -</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($result as $key => $user) { ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><img width="400" src="../uploads/users/<?= $user['img'] ?>" alt=""></td>
                            <td>
                                <button data-id="delete.php?id=<?= $user['id'] ?>" class="delete_btn btn btn-primary">Remove User</button>

                            </td>
                        </tr>
                    <?php  } ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require '../dashboard_parts/footer.php' ?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('.delete_btn').click(function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            link = $(this).attr('data-id');
            window.location.href = link;
        })
    });
</script>

<?php if (isset($_SESSION['success'])) { ?>
    <script>
        Swal.fire(
            'Deleted !',
            '<?=$_SESSION['success']?>',
            'success'
        )
    </script>
<?php  }
unset($_SESSION['success']) ?>