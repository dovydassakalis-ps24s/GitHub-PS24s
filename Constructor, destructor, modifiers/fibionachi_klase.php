<?php
class fibionachi {
	public $ats;
	public $x;
	function __construct($x){
		$this->x=$x;	
	}
	
	function skaiciavimas(){
		$a=0;
			$b=1;
			for($i=3;$i<=$this->x;$i++){
				$n=$a+$b;
				$a=$b;
				$b=$n;
			}
		$this->ats=$n;
	}
	
	function atsakymas(){
		return $this->ats;
	}
}
?>