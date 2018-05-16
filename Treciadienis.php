<?php


try {


    $host = 'localhost';
    $username = 'Lukas';
    $pass = 'radeonas2';
    $dbName = 'lukas'; //duomenu bazes pavadinimas
    $port = 3307;

//prisijungimas i duomenu baze kitokiu principu nei vakar...
    $dht = new PDO('mysql:host=localhost:3307;dbname=lukas',
        'Lukas',
        'radeonas2');
    echo'PAEJO!!!';
} catch (PDOException $exception) {

    echo 'Kazkas nekanalina... :' .$exception->getMessage();
}


$sql='SELECT *FROM users ';

$query= $dht-> prepare($sql);
$query->execute();
echo'<pre>';
print_r($query->fetchAll(PDO::FETCH_OBJ));
echo'</pre>';

// kitoks budas istraukti informacija is duomenu bazes lenteles

$userid=1;


$query1=$dht->prepare("SELECT * FROM users WHERE id =:user_id");
$query1->bindValue(':user_id',$userid,PDO::PARAM_INT);



$query1->execute();
echo '<pre>';
print_r($query1->fetchAll(PDO::FETCH_OBJ));

echo '</pre>';


$email='my@email.com';

$query2= $dht->prepare("SELECT *
 FROM users.*, user_adresses.adress
INNER JOIN user_adresses 
ON  users.id = users_adresses.user_id
WHERE users.id=:user_id
"); //AND users.email =:email

$query2->bindValue(
    ':user_id',
    $userid,
    PDO::FETCH_OBJ);



$query2->execute();
print_r($query2->fetchAll(PDO::FETCH_OBJ));

$query2->bindValue(':email',$email);



//order by rusiavimas ASC- rusuoja pagal abecele nuo a iki z. DESC rusuoja nuo paskutines iki pirmutines raides.


$query3= $dht->prepare('SELECT * 
FROM towns
ORDER BY title ASC , id DESC 
');

$query3->execute();
echo '<pre>';
print_r($query3->fetchAll(PDO::FETCH_OBJ));
echo '</pre>';











































































































































