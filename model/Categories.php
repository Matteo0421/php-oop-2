<?php

class Categories {
    private $id;
    private $categories;
    private $breed;

    public function __construct($id, $_categories, $_breed ) {
        $this->id = $id;
        $this->categories = $_categories;
        $this->breed = $_breed;
    }

    public function getId() {
        return $this->id;
    }

    public function getCategories() {
        return $this->categories;
    }

    public function getBreed() {
        return $this->breed;
    }
}

?>
