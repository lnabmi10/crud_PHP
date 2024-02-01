<?php



include('../connectDB.php');

// recuperer le post depuis le lien
    $id = $_GET['id'];
//recuperation des donnees envoyées par le formulaire

    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $category = $_POST['product_category'];


    // enregister ces donner dans la db products where id =$id
    $query = "UPDATE products SET `product_name`='".$name."',
     `price`=".$price.", `category`='".$category."' WHERE id=$id" ;

    if (mysqli_query($conn, $query)) {
        header('Location: listProduct.php');
        exit;
    } else {
        echo "Erreur d'insertion : " . mysqli_error($conn);
    }