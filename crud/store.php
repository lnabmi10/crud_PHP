<?php

include('../connectDB.php');


//recuperation des donnees envoyées par le formulaire

    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $category = $_POST['product_category'];



    // Insert the product data into the database
    $sql = "INSERT INTO products (product_name, price, category) VALUES ('$name', $price, '$category')";

if (mysqli_query($conn, $sql)) {
    header('Location: listProduct.php');
    exit;
} else {
    echo "Erreur d'insertion : " . mysqli_error($conn);
}



?>

    