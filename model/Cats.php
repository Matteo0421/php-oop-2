<?php

class Cats extends Categories {
    private $color;

    public function __construct($_id, $_categories,$_breed, $_color) {
        parent::__construct($_id, $_categories, $_breed);
        $this->color = $_color;
    }

    public function getColor() {
        return $this->color;
    }
}

?>
