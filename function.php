<?php
// PGCD de deux nombres 
function pgcd($a, $b){
    if ($b == 0){
        return $a;
    }   
    return pgcd($b, $a%$b);
}

// Test Primarité d'un nombre 
function isPremier($nombre, $div=2) {
    if ($div*$div <= $nombre) {
        if ($nombre % $div == 0) {
            return false;
        }
        return isPremier($nombre, $div+ 1);
    }
    return true;
}
echo isPremier(25);
echo isPremier(15);
