<?php

class Games extends Products {
    private $materials; // Peluche, Gomma, Plastica, ecc.

    public function __construct($id, $titolo, $descrizione, $prezzo, $immagine, Categories $categories, $materials, $discountPercentage) {
      parent::__construct($id, $titolo, $descrizione, $prezzo, $immagine, $categories, $discountPercentage);
      $this->materials = $materials;
  }

    public function getMateriale() {
        return $this->materials;
    }
}

?>
