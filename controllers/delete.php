<?php
include "db_conn.php";
$id = $_GET["id"];
$query = "DELETE FROM `users` where `id`='$id' ";
$result = mysqli_query($conn, $query);
if ($result) {
    header("Location:index.php?msg=Record Deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}
?>