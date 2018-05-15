<?php
$host= 'localhost';
$username= 'Lukas';
$password= 'radeonas2';
$dbName='lukas'; //duomenu bazes pavadinimas
$port = 3307;

$db = mysqli_connect($host ,$username,$password,$dbName,$port);


//patikrinimas ar prisijungei prie duombazes

if (!$db) {
    die( 'Cia kazkas negerai...' . mysqli_connect_error());
}
else
    echo 'FATAL ERROR: juokauju, viskas veikia juk...';
//sukurti lentele duoomenu bazeje
$sql= "CREATE TABLE IF NOT EXISTS `users`(
`id` INT(11) UNSIGNED NOT NULL  AUTO_INCREMENT, 
`email` VARCHAR (255) NOT NULL UNIQUE ,
`username` VARCHAR (20) NOT NULL UNIQUE ,
`password` VARCHAR (32) NOT NULL ,
PRIMARY KEY (`id`)
)ENGINE='InnoDB'CHARACTER SET utf8";

mysqli_query($db,$sql);

//uzpildyti duomenis duomenu bazeje, sukurtoje lenteleje

$sql1= "INSERT INTO `users` (`email` , `username` , `password`)
VALUES ('my@email.com','PetrasGrazuolis', MD5('Pokemonaijega') )";

mysqli_query($db,$sql1);


//pakeisti informacija vietoje esamos.




$sql2= "UPDATE `users` SET `username` ='new_username' 
WHERE `id`=13 "; // viettoje = galima naudot IN ir suvesti id kuriuose nori keisti,
//arba galima parasyti ten kur nenori pakesiti tai rasyti sauktuka ir lygybes zenkla !=
mysqli_query($db,$sql2);

// duomenu istraukimas ir atvaizdavimas, jeigu reikia is konkretaus id islupti po FROM users rasai echo '<pre>';
//WHERE `id`= reikiamas id

$sql3 = " SELECT *
FROM `users`
";

$users =mysqli_query($db,$sql3);

foreach (mysqli_fetch_all($users, MYSQLI_ASSOC) as $user)
{
    echo '<pre>';
    print_r($user);
    echo '</pre>';

};






