<?php
// recuperer le post depuis le lien
$id = $_GET['id'];
$editedProduct="registerEditedProduct.php?id=$id";
include('../connectDB.php');
// select product data where id = $id
$query = "SELECT * FROM products WHERE ID='".$id."'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center"> <h2> EDIT PRODUCT</h2></div>
    <div class="container">
    <form action=<?php echo $editedProduct ?> method="post" class="mt-5">
            
            <div class="mb-3">

                <label for="product_name" class="form-label">Product Name:</label>
                <input type="text" id="product_name" name="product_name" class="form-control" value=<?php echo $row['product_name']; ?> required>
            </div>
            
            <div class="mb-3">
                <label for="product_price" class="form-label">Product Price:</label>
                <input type="number" id="product_price" name="product_price" step="0.01" value=<?php echo $row['price']; ?> class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="product_category" class="form-label">Product Category:</label>
                <input type="text" id="product_category" name="product_category" value=<?php echo $row['category']; ?> class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">edit Product</button>
            <a href='listProduct.php'   class='btn btn-success'> return to the list</a>
    </form>

    </div>
    
        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>

</body>
</html>


