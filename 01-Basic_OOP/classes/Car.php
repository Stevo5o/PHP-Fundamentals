<?php

/*  
 * 
 */
class Car {
   private $make;
   private $model;
   private $color;

   public function __construct($make,$model,$color) {
   	$this->make = $make;
   	$this->model = $model;
   	$this->color = $color;
   }
   
   public function start() {
      echo 'Car Starting';
   }

   public function setMake($make) {
   	$this->make = $make;
   }

   public function getMake() {
   	return $this->make;
   }
}

