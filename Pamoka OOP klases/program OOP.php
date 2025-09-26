<?php
  class pirma {
// Properties
  public $a;
  public $b,$ats;
  // Methods
  function set_a($x) {
    $this->a = $x;
  }
  function set_b($x) {
    $this->b = $x;
  }
  function get_ats() {
    return  $this->ats;
  }
   function skaiciuok() {
     $this->ats=$this->a+$this->b;
   }
}

$obj=new pirma();

 $v=2;   $g=3;
 $obj-> set_a($v);
 $obj-> set_b($g);
 $obj-> skaiciuok();
 $ats_gautas=$obj-> get_ats();
 print ( $ats_gautas);
?>
