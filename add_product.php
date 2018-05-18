<h1>Pridėk prekę</h1>

<br>
<form action="" method="post"
<br><label for="title">Pavadinimas</label>
<br><input type="text" name="title" value="">
<br>
<br><label for="description">Aprasymas</label>
<br><textarea name="description"></textarea>
<br>
<label for="price">Kiek pakainuoja?</label>
<br><input type="number" name="price" step="0.1">
<br>
<label for="quantity">Kiekis</label>
<br><input type="number" name="quantity" step="1" value="">
<br>
<input type="submit" name="submit_button" value="Padaryk saugiai">
</form>


<li><a href="index.php">Pagrindinis</a></li>


<?php
//<input type="number" name="price" step="0.1" >
/// step=0.1 po kiek kaina kyla
?>


<?php
require_once 'bootstrap.php';

use  Shop\Models\Product;

if (isset($_POST['submit_button'])) {
    $data = [];

    $data['title'] = $_POST['title'];
    $data['description'] = $_POST['description'];
    $data['price'] = $_POST['price'];
    $data['quantity'] = $_POST['quantity'];


    $productClass = new Product($conn);

    $productClass->saveProduct($data);
header('Location: http://localhost:63342/nedatekimas5/projektas/all_products.php');

}