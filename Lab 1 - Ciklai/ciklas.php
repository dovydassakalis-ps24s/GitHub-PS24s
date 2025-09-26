<?php
$x = 34; //testuojamas skaicius
$iteracijos = 1; //iteracijos pradine reiksme
print($x."/n"); //spausdinama pradine reiksme
while ($x != 1) { //ciklas while kol reiksme nelygi 1
    if ($x % 2 == 0) { // tikriname ar $x dalinant is 2 liekana yra lygi 0
        $x = $x / 2; //jeigu taip, tuomet $x dalinamas is 2
    } else {
        $x = 3 * $x + 1; //kitu atveju $x apskaiciuojamas 3*$x+1
    }
    print($x."/n"); //spasdinama $x reiksme
    $iteracijos++; //prie iteracijos pridedamas 1
} //test


print("zingsniai:". $iteracijos."/n"); //spausdinamas galutine iteracijos reiksme
?>
