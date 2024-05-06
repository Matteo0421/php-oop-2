<?php

class Products {
    public $id;
    public $title;
    public $description;
    public $price;
    public $image;
    public $categories;

    public function __construct($id, $title, $description, $price, $image, Categories $categories) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->categories = $categories;

        // controllo del prezzo, se il prezzo è di 0 euro o negativo allora vedremo a schermo un errore
        if ($price <= 0) {
            throw new Exception("Il prezzo deve essere maggiore di 0");
        }
    }
}

?>

