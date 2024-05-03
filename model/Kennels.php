<?php

class Cuccia extends Products {
    private $dimensioni; // Piccola, Media, Grande, ecc.

  
    public function __construct($id, $titolo, $descrizione, $prezzo, $immagine, Categories $categories, $dimensioni) {
      parent::__construct($id, $titolo, $descrizione, $prezzo, $immagine, $categories);
      $this->dimensioni = $dimensioni;
  }

    public function getDimensioni() {
        return $this->dimensioni;
    }
}

?>
