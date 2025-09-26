<?php
include_once "program OOPseparate_class.php";


$objA=new math();
$objB=new math();
$objC=new math();


$objB->set_data(54);
$objB-> writeMsg(2);
print ($objB->get_data());
?>
