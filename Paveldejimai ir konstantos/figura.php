<?php
include('klase_figura.php');

// Kvadrato klasė paveldi Figura klasę
class Kvadratas extends Figura {

    // Metodas nustatyti kvadrato matmenims (kvadrato ilgis ir plotis vienodi)
    public function nustatytiIlgi($ilgis) {
        // Kvadratui plotis lygus ilgiui
        $this->ilgis = $ilgis;
        $this->plotis = $ilgis;
    }
}

// Stačiakampio klasė paveldi Figura klasę
class Staciakampis extends Figura {
    // Stačiakampis naudoja tėvinės klasės metodus
}

// Sukuriame Kvadratas objektą
$kvadratas = new Kvadratas();
$kvadratas->nustatytiIlgi(4);
echo "Kvadrato plotas: " . $kvadratas->plotas() . "<br>";
echo "Kvadrato perimetras: " . $kvadratas->perimetras() . "<br>";

// Sukuriame Staciakampis objektą
$staciakampis = new Staciakampis();
$staciakampis->nustatytiMatmenis(4, 6);
echo "Stačiakampio plotas: " . $staciakampis->plotas() . "<br>";
echo "Stačiakampio perimetras: " . $staciakampis->perimetras() . "<br>";
?>
