<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $sql = "UPDATE `users` SET `name`='$name',`mobile`='$mobile',`address`='$address' WHERE `id`='$id' ";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location:index.php?msg=Data Updated successfully");
    }
    else{
        echo "Failed: " .mysqli_error($conn);
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
<nav class=" navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
</nav>

<div class="container">
    <div class="text-center mb-4">
        <h3>Edit User Information</h3>
        <p class="text-muted">Clicked Update after changing any Information.</p>
    </div>

    <?php
    $query = "SELECT * FROM `users` where `id`='$id' ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    ?>


    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width: 300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">User Name :</label>
                    <input type="text" class="form-control" name="name"
                           value="<?php echo $row['name'] ?>">
                </div>
            </div>
            <div class="row  mt-3">
                <div class="col">
                    <label class="form-label">Contact Number :</label>
                    <input type="text" class="form-control" name="mobile"
                           value="<?php echo $row['mobile'] ?>">
                </div>
                <div class="col">
                    <label class="form-label">User Address :</label>
                    <input type="text" class="form-control" name="address"
                           value="<?php echo $row['address'] ?>">
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-success" name="submit"> Update User</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/b0d0eaa2c0.js" crossorigin="anonymous"></script>
</body>
</html>
