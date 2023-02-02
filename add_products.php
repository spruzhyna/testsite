<?php include('add_products_form.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Products</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<form method="post" action="add_products.php">

    <?php echo display_error(); ?>
    <div class="add_product_system">
    <h2>Add Products</h2>
    <div class="input-group">
        <label>price</label>
        <input type="text" name="price" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>UrlImage</label>
        <input type="text" name="UrlImage" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>salatname</label>
        <input type="text" name="salatname">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="add_btn">Add Products</button>
    </div>
</div>
</form>
</body>
</html>