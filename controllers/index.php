<?php

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
<nav class=" navbar navbar-light justify-content-center fs-3 mb-5 fw-bold" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
</nav>

<div class="container">
    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show fw-bold" role="alert">' . $msg . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

    }
    ?>

    <a href="add_new.php" class="btn btn-secondary fw-bold">Add New</a>

    <table class="table table-hover text-center mt-3 fw-bold">
        <thead class="table-dark">
        <tr>
            <th scope="col">User ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Contact Number</th>
            <th scope="col">User Address</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "db_conn.php";

        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['mobile'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-warning">
                        <i class="fa-solid fa-pen-to-square fs-5 me-3"></i> </a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-danger">
                        <i class="fa-solid fa-trash fs-5"></i> </a>
                </td>
            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/b0d0eaa2c0.js" crossorigin="anonymous"></script>
</body>
</html>
