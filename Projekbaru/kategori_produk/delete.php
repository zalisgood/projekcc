<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$name = $_GET['nama'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM kategori_produk WHERE nama=$name");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:indexkategori.php");
?>