<?php
require_once 'bootstrap.php';

use Shop\Models\product;

$productClass = new Product($conn);

$productId = $_GET['product_id'];

if (isset($_POST['submit_button'])) {
    $data = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity'],
    ];
$productClass->updateProduct($productId, $data);
header('Location:http://localhost:8080/LukasS/nedatekimas5/projektas/all_products.php');
}else {
$product = $productClass->getById($productId)->fetch(PDO::FETCH_OBJ);
}

//print_r($product); pasitikrinimui ar veikia
?>
<li><a href="index.php">Pagrindinis puslapis</a></li>
<li><a href="all_products.php">Visi produktai</a></li>


<form action="" method="post">
    <h2>Edit Product</h2>
    <br>
    <label for="title">Pavadinimas</label>
    <br>
    <input type="text" name="title" value="<?php echo $product->title; ?>">
    <br>
    <label for="description">Aprasymas</label>
    <textarea name="description"><?php echo $product->description; ?> </textarea>
    <br>
    <label for="price">Kaina</label>
    <br>
    <input type="number" name="price" step="0.01" value="<?php echo $product->price; ?>">
    <br>
    <label for="quantity">Kiekis</label>
    <br>
    <input type="number" name="quantity" step="1" value="<?php echo $product->quantity; ?>">
    <br>
    <input type="submit" name="submit_button" value="Saugoti">


</form>
