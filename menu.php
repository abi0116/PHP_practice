<?php
class Menu {
  protected $name;
  protected $price;
  protected $image;
  private $orderCount = 0;
  protected static $count = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    self::$count++;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }