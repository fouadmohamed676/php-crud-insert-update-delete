<?php
include_once 'database.php';
$sql = "DELETE FROM rental WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    // header("Location : maintenance_flag.php?id=$id");
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>