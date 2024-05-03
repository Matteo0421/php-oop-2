<?php

class Categories {
    private $id;
    private $name;
    public $breed;

    public function __construct($id, $_name, $_breed ) {
        $this->id = $id;
        $this->name = $_name;
        $this->breed = $_breed;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->name;
    }
}

?>
