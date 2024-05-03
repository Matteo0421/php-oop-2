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
    }
}

?>

