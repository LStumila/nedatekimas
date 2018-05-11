<?php
/**
 * Baseinas
 */
/**
 * @param $ilgis
 * @param $plotis
 * @param $gylis
 * @return float
 */
function plytelesBaseinui($ilgis, $plotis, $gylis)
{
    // Apskaiciuojamas baseino sienu plotas
    $baseinoPlotas = apskaiciuotiDugnoPlota($ilgis, $plotis) +
        apskaiciuotiSienuPlota($gylis, $ilgis) +
        apskaiciuotiSienuPlota($gylis, $plotis);
    $plytelesPlotas = plytelesPlotis(12, 12, 0.4);
    return ceil($baseinoPlotas / $plytelesPlotas);
}
function apskaiciuotiDugnoPlota($ilgis, $plotis)
{
    return $ilgis * $plotis; // Grazina dugno ploti
}
function apskaiciuotiSienuPlota($gylis, $ilgis)
{
    return $gylis * $ilgis * 2;
}
function plytelesPlotis($ilgis, $plotis, $tarpas = 0)
{
    return ($ilgis + $tarpas) * ($plotis + $tarpas);
}
echo 'Reikalina plyteliu: ' .
    plytelesBaseinui(2500, 1000,300);