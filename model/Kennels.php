<?php

class Kennels extends Products {
    private $dimensioni; // Piccola, Media, Grande, ecc.

  
    public function __construct($id, $titolo, $descrizione, $prezzo, $immagine, Categories $categories, $dimensioni, $discountPercentage) {
      parent::__construct($id, $titolo, $descrizione, $prezzo, $immagine, $categories, $discountPercentage);
      $this->dimensioni = $dimensioni;
  }

    public function getDimensioni() {
        return $this->dimensioni;
    }
}

?>
