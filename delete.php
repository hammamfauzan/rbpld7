<?php
// include database connection file
include_once("koneksi.php");

// Get id from URL to delete that user
$ID = $_GET['ID'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM databarang WHERE ID=$ID");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:show.php?pesan=delete_sukses");
?>