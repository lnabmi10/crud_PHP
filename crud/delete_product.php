<?php
// recuperer le post depuis le lien
$id = $_GET['id'];
include('../connectDB.php');

// delete products  from DB
$query = "DELETE FROM products WHERE id='".$id."'";
mysqli_query($conn, $query);
header('Location: listProduct.php');
exit;
?>
