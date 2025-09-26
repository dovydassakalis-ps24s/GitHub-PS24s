<?php
class collatz { 
public $skaicius, $ats;
const maksimaliReiksme = 10; 
	
function set_skaicius($x) { 
   $this->skaicius = $x;
}

function get_skaicius() {
    return $this->skaicius;
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

class faktorialas extends collatz {
  public function skaiciavimas() {
  $pradinis=$this->get_skaicius();
  if ($pradinis < 0 || $pradinis > self::maksimaliReiksme) {
		print("<p style=color:red;>Faktorialas negali buti apskaiciuotas!<br></p>");
		print("Skaicius buti tarp 0 ir " . self::maksimaliReiksme . "<br>");
        return;
   }
  $fakt = 1;
        for ($i = 1; $i <= $pradinis; $i++) {
            $fakt *= $i;
        }
        print("faktorialas skaiciaus " .$pradinis. " yra: ".$fakt."<br>");
  }
}

$t=7;

$obj = new faktorialas();
$obj-> set_skaicius($t);
$obj-> skaiciuok();
$ats_gautas=$obj-> get_ats();
print ("zingsniai: ". $ats_gautas. "<br>");
print ("<br>");
$obj->skaiciavimas();
?>