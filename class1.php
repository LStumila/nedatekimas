<?php


class Automobile
{
    public function  __construct()
    {

        $this->autos = (object)[

            [
                'model' => 'BMW',
                'marke' => '3',
            ],
            [
                'model' => 'Audi',
                'marke' => 'Bulka',
            ]
        ];
    }

    function printModel(  )
    {
       foreach ($this->autos as $auto){
             echo $auto['model'] . '<br>';
       }
    }

    function printMarke()
    {
        foreach ($this->autos as $auto) {
            echo $auto['marke'] . '<br>';
        }
    }
}
$a= new Automobile();
$a -> printModel();
$a -> printMarke();
