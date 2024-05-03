<?php

class Foods extends Products {
    private $type; // Croccantini, Umido, Snack, ecc.

    public function __construct($id, $titolo, $descrizione, $prezzo, $immagine, Categories $categories, $type) {
        parent::__construct($id, $titolo, $descrizione, $prezzo, $immagine, $categories);
        $this->type = $type;
    }

    public function getTipo() {
        return $this->type;
    }
}

?>
