<?php 

class Category {
  public $target;
  public $icon;

  public function __construct($_target, $_icon)
  {
    $this->target = $_target;
    $this->icon = $_icon;
  }
}

?>