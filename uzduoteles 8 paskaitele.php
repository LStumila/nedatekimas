<?php
try {


    $host = 'localhost';
    $username = 'Lukas';
    $pass = 'radeonas2';
    $dbName = 'lukas'; //
    $port = 3307;


    $dht = new PDO('mysql:host=localhost:3307;dbname=lukas',
        'Lukas',
        'radeonas2');
// PDOException- gaudo tik PDO klaidas, nutrynus PDO gaudys visas klaidas
} catch (PDOException $exception) {

    echo 'Kazkas nekanalina... :' .$exception->getMessage();
}

// Duomenu surinkimas is skirtingu lenteliu esanciu duomenu bazeje naudojant join funkcija JOIN

$sql="SELECT regions.title as HOOD, shops.title as Krautuve
FROM regions
JOIN shops ON regions.id = shops.region_id ";




$query = $dht->prepare($sql);
$query->execute();
//echo'<pre>';
//print_r($query->fetchAll(PDO::FETCH_OBJ));
//echo '</pre>';

echo'<ul>';
foreach ($query->fetchAll(PDO::FETCH_OBJ)as $row ){

    echo'<li>'. $row->Krautuve . " priklauso " . $row->HOOD;'</li>';

};
echo'</ul>';

//  DUOMENU SURINKIMAS NAUDOJANT KOMANDA CONCAT
// &NBSP; - tarpas

$sql1= "SELECT 
CONCAT(shops.title, '&nbsp; priklauso ', regions.title) AS belenkas
FROM regions
JOIN shops ON regions.id= shops.region_id";

$query1=$dht->prepare($sql1);
$query1->execute();

echo'<ul>';
foreach ($query1->fetchAll(PDO::FETCH_OBJ)as $row) {

    echo '<li>'.$row->belenkas .'</li>';
    }
echo '</ul>';





//// duomemnu sugrupavimas naudojant GROUP BY funkcija
// ir skaiciavimas su count funkcija

$sql2="SELECT regions.id, regions.title,
 COUNT(shops.id) as krautuviu_skaicius
FROM regions
JOIN shops ON regions.id = shops.region_id 
GROUP BY regions.title";

$query2= $dht->prepare($sql2);
$query2->execute();


echo'<pre>';
print_r($query2->fetchAll(PDO::FETCH_OBJ));
echo'</pre>';







































