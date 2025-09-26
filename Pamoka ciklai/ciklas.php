<?php
    $ats=0;
    for ($x = 1; $x <= 10; $x++) { 
        $ciklo_atsakymas=$ats+$x;
         $ats=$ciklo_atsakymas;
    }

    print ("atsakymas: $ats <br>");
    //$x++ tas pats $x=$x+1
    // $ats=1+2+3+4+5+..+10
?>