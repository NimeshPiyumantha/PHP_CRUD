<?php
include "db_conn.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `users`(`id`, `name`, `mobile`, `address`) VALUES ('$id','$name','$mobile','$address')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location:index.php?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
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
    <div class="text-center mb-4">
        <h3>Add New User</h3>
        <p class="text-muted">Complete the form below to add a new user</p>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width: 300px;">
            <div class="row">
                <div class="col">
                    <label class="form-label fw-bold">User ID :</label>
                    <input type="text" class="form-control fw-bold" name="id" placeholder="C001">
                </div>
                <div class="col">
                    <label class="form-label fw-bold">User Name :</label>
                    <input type="text" class="form-control fw-bold" name="name" placeholder="Nimesh">
                </div>
            </div>
            <div class="row  mt-3">
                <div class="col">
                    <label class="form-label fw-bold">Contact Number :</label>
                    <input type="text" class="form-control fw-bold" name="mobile" placeholder="07771234567">
                </div>
                <div class="col">
                    <label class="form-label fw-bold">User Address :</label>
                    <input type="text" class="form-control fw-bold" name="address" placeholder="Galle">
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-success fw-bold" name="submit"> Save User</button>
                <a href="index.php" class="btn btn-danger fw-bold">Cancel</a>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/b0d0eaa2c0.js" crossorigin="anonymous"></script>
</body>
</html>
