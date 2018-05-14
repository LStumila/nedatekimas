<?php
$auto1 = (object)
    (object)
    [
        'model' => 'BMW',
        'marke' => '3',
    ];

    $auto2=(object)
    [
        'model' => 'Audi',
        'marke' => 'Bulka',
    ];

    $a= new Automobile();
    $a->setData($auto1);
$a->getData($auto1);
$a->setData();
$a->getData();



class Automobile
{
    private $autos;


    public function  __construct()
{
    $this->autos-=(object)[];
}

    function setData($data, $index = 'pirmas')
    {
     $this->autos->$index=$data;
    }

    function getData()
    {
        print_r($this->autos);
    }
}
