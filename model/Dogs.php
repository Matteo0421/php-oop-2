<?php

class Dogs extends Categories {
    private $size;

    public function __construct($_id, $_categories,$_breed, $_size) {
        parent::__construct($_id, $_categories, $_breed);
        $this->size = $$_size;
    }

    public function getSize() {
        return $this->size;
    }
}

?>
