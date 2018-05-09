<?php



define('PAVADINIMAS' , 'puslapis' );

echo PAVADINIMAS;

if (define('pavadinimas'))
{
    echo  PAVADINIMAS;

}
else
{echo  'Please define PAVADINIMAS';
}

