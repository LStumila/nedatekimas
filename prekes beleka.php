<?php


    $prekiukiekis=10;
    $norimasprekeskiekis=11;
    $galimaparduoti= false  ;
    $minimaluskiekis =1 ;

        if ($norimasprekeskiekis <= $prekiukiekis && $minimaluskiekis  )
        {
            echo 'Liko viena <br>';
        }
        else
        {
            echo "turim per daug prekiu <br>";
        }