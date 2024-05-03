<?php

class Games extends Products {
    private $materials; // Peluche, Gomma, Plastica, ecc.

    public function __construct($id, $titolo, $descrizione, $prezzo, $immagine, Categories $categories, $materials) {
      parent::__construct($id, $titolo, $descrizione, $prezzo, $immagine, $categories);
      $this->materials = $materials;
  }

    public function getMateriale() {
        return $this->materials;
    }
}

?>
