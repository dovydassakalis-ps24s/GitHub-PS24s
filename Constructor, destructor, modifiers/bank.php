<?php
class BankoSaskaita {
     private$balansas; // Privatūs duomenys negali būti tiesiogiai pasiekti iš išorės

    public function __construct($pradinisBalansas) {
        if ($pradinisBalansas > 0) {
            $this->balansas = $pradinisBalansas;
        } else {
            print("<p style=color:red;> Pradinė suma turi būti didesnė nei 0Eur</p>");
        }
    }

    public function gautiBalansa() {
        return $this->balansas;
    }

    public function inesti($suma) {
        if ($suma > 0) {
            $this->balansas += $suma;
            echo "Įnešta: ". $suma . ". Balansas: " . $this->gautiBalansa() . "Eur<br>";
        } else {
            echo "Suma turi būti teigiama!<br>";
        }
    }

    public function nuimti($suma) {
        if ($suma > 0 && $suma <= $this->balansas) {
            $this->balansas -= $suma;
            echo "Nuimta: $suma. Liko: " . $this->gautiBalansa() . "Eur<br>";
        } else {
            echo "Nepakanka lėšų arba netinkama suma!<br>";
        }
    }
}


    $saskaita = new BankoSaskaita(100); // Pradinis balansas: 100Eur
    $saskaita->inesti(50);   // Įnešame 50Eur
    $saskaita->nuimti(30);   // Nuimame 30Eur
    $saskaita->nuimti(150);  // Bandom nuimti daugiau nei turime
	
		
	//echo "Tiesiogiai: Dabar yra saskaitoje:".$saskaita->balansas."EUR. <br>";	 // BUS KLAIDA NES BANDOME PASIEKTI PRIVATE KITANTAMAJI
	
	//Jei norime gauti kiek yra likutis turime kreiptis per metoda
	echo  "Dabar yra saskaitoje: ". $saskaita->gautiBalansa()."Eur <br>";
	
    // Naujas objektas su  Bandymas sukurti sąskaitą su neteisinga suma <0
    $neteisingaSaskaita = new BankoSaskaita(-50);
	//objetas sukurtas, tik nepriskirta suma 
	$neteisingaSaskaita->inesti(50);  // Įnešame 50Eur

?>
