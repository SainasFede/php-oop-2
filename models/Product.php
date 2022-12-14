<?php

class Product
{
  public $category;
  public $name;
  public $brand;
  public $price;
  public $poster;

  public function __construct(Category $_category, $_name, $_brand, $_price, $_poster)
  {
    $this->category = $_category;
    $this->name = $_name;
    $this->brand = $_brand;
    $this->price = $_price;
    $this->poster = $_poster;
  }

  public function getImg(){
    return $this->poster ?? 'https://dunlite.com.au/wp-content/uploads/2019/04/placeholder.jpg';
  }
}

?>