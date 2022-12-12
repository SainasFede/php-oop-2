<?php 

class Toy extends Product {
  public $weight;
  public $size;

  public function __construct(Category $_category, $_name, $_brand, $_price, $_poster, $_weight, $_size)
  {
    parent::__construct($_category, $_name, $_brand, $_price, $_poster);

    $this->weight = $_weight;
    $this->size = $_size;
  }
}

?>