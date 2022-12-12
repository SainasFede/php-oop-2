<?php 

class Clean extends Product {
  public $type;

  public function __construct(Category $_category, $_name, $_brand, $_price, $_poster, $_type)
  {
    parent::__construct($_category, $_name, $_brand, $_price, $_poster);

    $this->type = $_type;
  }
}

?>