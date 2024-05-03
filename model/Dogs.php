<?php

class Dogs extends Categories {
    private $size;

    public function __construct($id, $name,$breed, $_size) {
        parent::__construct($id, $name, $breed);
        $this->size = $$_size;
    }

    public function getSize() {
        return $this->size;
    }
}

?>
