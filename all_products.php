</table>
<li><a href="index.php">Pagrindinis</a></li>
<li><a href="newest_products.php">Naujienuuuu pasaulyjee</a></li>
<?php


require_once 'bootstrap.php';

use  Shop\Models\Product;

$productsClass = new  Product($conn);

$products = $productsClass->getProducts()->fetchAll(PDO::FETCH_OBJ);

?>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Pavadinimas</th>
        <th>Aprasymas</th>
        <th>Kaina</th>
        <th>Kiekis</th>
        <th>Veiksmai</th>
    </tr>

    <?php
    foreach ($products as $product) {
        echo '<tr>';
        echo '<td>', $product->id . '</td>';
        echo '<td>', $product->title . '</td>';
        echo '<td>', $product->description . '</td>';
        echo '<td>', $product->price . '</td>';
        echo '<td>', $product->quantity . '</td>';

        echo '<td>' . '<a href="edit_product.php?product_id=' . $product->id. '">Edit</a>'  . '</td>';
        echo '</tr>';



    }


    ?>

