<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Product</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Add Product</h1>
        <form action="store.php" method="post" class="mt-5">
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name:</label>
                <input type="text" id="product_name" name="product_name" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="product_price" class="form-label">Product Price:</label>
                <input type="number" id="product_price" name="product_price" step="0.01" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="product_category" class="form-label">Product Category:</label>
                <input type="text" id="product_category" name="product_category" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>