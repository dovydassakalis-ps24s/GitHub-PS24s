<?php
class collatz { 
public $skaicius, $ats; 
	
function set_skaicius($x) { 
   $this->skaicius = $x;
}
	
function get_ats() {
   return  $this->ats;
}

function skaiciuok() {
	$x = $this->skaicius;
    $this->ats = 1;
	print($x . "<br>");
        
	while ($x !== 1) {
		if ($x % 2 == 0) {
            $x = $x / 2;
        } else {
            $x = 3 * $x + 1;
        }
        $this->ats++;
		print($x . "<br>");
    }
}
}

$obj=new collatz();

$t=11;

$obj-> set_skaicius($t);
$obj-> skaiciuok();
$ats_gautas=$obj-> get_ats();
print ("zingsniai: ". $ats_gautas);
?>