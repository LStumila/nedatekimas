<?php

require_once 'bootstrap.php';

use  Shop\Models\Product;

$productsClass = new  Product($conn);

$products = $productsClass->getProducts(2, 'id', 'DESC')
    ->fetchAll(PDO::FETCH_OBJ);

?>
<ul>
    <?php
    foreach ($products as $product) {
        echo '<li>' . $product->title . '</li>';
    }

    ?>
    <ul>
        <li><a href="index.php">Pagrindinis</a></li>
        <li><a href="newest_products.php">Naujienuuuu pasaulyjee</a></li>
    </ul>

</ul>
