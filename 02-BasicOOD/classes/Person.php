<?php

/*
 *  
 */

class Person
{

   private $name;
   private $job;

   public function __construct($name, $job)
   {
      $this->name = $name;
      $this->job = $job;
   }

   public function communicate($style = 'voice')
   {
      return 'Communicating ' . $style;
   }

}
