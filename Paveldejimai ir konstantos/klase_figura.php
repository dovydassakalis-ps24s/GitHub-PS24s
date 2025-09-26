<?php
// Bendroji figūros klasė
class Figura {
    public $ilgis;
    public $plotis;

    // Metodas nustatyti figūros matmenims
    public function nustatytiMatmenis($ilgis, $plotis) {
        $this->ilgis = $ilgis;
        $this->plotis = $plotis;
    }

    // Bendrasis metodas perimetrui apskaičiuoti
    public function perimetras() {
        return 2 * ($this->ilgis + $this->plotis);
    }
    
    // Bendrasis metodas plotui apskaičiuoti
    public function plotas() {
        return $this->ilgis * $this->plotis;
    }
}

?>
