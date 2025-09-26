<?php
include("fibionachi_klase.php");
	$obj=new fibionachi(10);
	$obj1=new fibionachi(20);
	
	$obj->skaiciavimas();
	
	$abs=$obj->atsakymas();
	print ($abs);
	
	print ("<br>");
	$obj1->skaiciavimas();
	print ($obj1->atsakymas());	
?>