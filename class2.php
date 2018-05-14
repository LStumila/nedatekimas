<?php

$autos = (object)[
    (object)
    [
        'model' => 'BMW',
        'marke' => '3',
    ],
    (object)
    [
        'model' => 'Audi',
        'marke' => 'Bulka',
    ]
];

$a= new Automobile($autos);
   class Automobile

   {
       private $autos;

       public function __construct($autos)
       {

           $this->autos = $autos;

           function printModel()
           {
               foreach ($this->autos as $auto) {
                   echo $auto->model . '<br>';
               }
           }

           function printMarke()
           {
               foreach ($this->autos as $auto) {
                   echo $auto->marke . '<br>';
               }
           }
       }
   }
$a= new Automobile();
$a -> printModel();
$a -> printMarke();
