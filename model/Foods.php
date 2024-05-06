<?php

require_once 'Products.php';

class Foods extends Products {
    private $type; // Croccantini, Umido, Snack, ecc.

    public function __construct($id, $titolo, $descrizione, $prezzo, $immagine, Categories $categories, $type, $discountPercentage) {
        parent::__construct($id, $titolo, $descrizione, $prezzo, $immagine, $categories, $discountPercentage);
        $this->type = $type;
    }

    public function getTipo() {
        return $this->type;
    }
}

?>
