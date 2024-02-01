<?php

include('../connectDB.php');

$sql = "SELECT  * FROM `products` ";

$res=mysqli_query($conn, $sql);

    
    
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
    

  <h2 class="container d-flex justify-content-center"> LIST OF PRODUCT </h2>
  <br/>
<div class="container">

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
 <th scope="">Name</th>
 <th scope="">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $message_confirmation = 'voulez vous suprimer le produit ?';
    if ($res->num_rows > 0) {
        while($row = $res->fetch_assoc()) {
            echo "<tr>";
            echo "<th scope='row'>" . $row["id"] . "</th>";
            echo "<td>" . $row["product_name"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row["category"] . "</td>";
            echo "<td>";
            echo "<a href='show_product.php?id=" . $row["id"] . "' class='btn btn-primary'>Show</a>";
            echo " <a onclick='return confirm()'" . "  href='delete_product.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No products found</td></tr>";
    }

    ?>
  </tbody>
</table>
</div>

<br/>
<div class="container">
<a href='createProduct.php' class='btn btn-primary'>add product</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>

</body>
</html>