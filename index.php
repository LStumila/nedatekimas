<?php


// bootstrap failo iskvietimas

require_once 'bootstrap.php';

use  Shop\Models\Product;

?>
<ul>
    <li><a href="all_products.php">Visi produktai</a></li>
    <li><a href="newest_products.php">Naujausi</a></li>
    <li><a href="add_product.php">Nauja preke</a></li>

</ul>


<?php

$productClass = new Product($conn);

$products = $productClass->getProducts()
    ->fetchAll(PDO::FETCH_OBJ);


?>

<table border="1" width="100%">
    <tr>
        <?php
        foreach ($products as $product) {
            echo '<td>' .
                $product->title . ' ' . $product->price . '</td>';
        }

        ?>
    </tr>
</table>