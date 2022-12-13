<?php 

class Clean extends Product {
  public $weight;
  public $type;

  public function __construct(Category $_category, $_name, $_brand, $_price, $_poster, $_weight ,$_type)
  {
    parent::__construct($_category, $_name, $_brand, $_price, $_poster);

    $this->weight = $_weight;
    $this->type = $_type;
  }
}

?>