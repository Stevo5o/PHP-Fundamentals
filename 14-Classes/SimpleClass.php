<?php

/* Simple Class */

class SimpleClass
{
   // property declaration
   public $lang, $hello;
   public $world;
   public $my;
   public $count = 0;
   public $correct_lang = true;

   public function __construct($lang, $hello, $my) 
   {
      $this->lang = $lang;
      $this->hello = $hello;
      $this->my = $my;     
   }

   // method declaration
   public function add_world($world) 
   {
      $this->world = $world;
   }
   
    // method declaration
   public function count() 
   {
      $this->count++;
   }
   
   public function check_lang()
   {
      $this->correct_lang = false;
   }
}

$SimClEng = new SimpleClass('English','Hello','my');
$SimClEng->add_world('World!');
$SimClEng->count();

echo "$SimClEng->lang: {$SimClEng->hello}, {$SimClEng->my} {$SimClEng->world}. No.{$SimClEng->count}";

echo ($SimClEng->correct_lang) 
   ? " It is correct!"
   : " It is not correct!";

echo '<br>';

$SimClFr = new SimpleClass('French','Bonjour','mon');
$SimClFr->add_world('mondiale!');
$SimClFr->count();
$SimClFr->count();

echo "$SimClFr->lang: {$SimClFr->hello}, {$SimClFr->my} {$SimClFr->world}. No.{$SimClFr->count}";

echo ($SimClEng->correct_lang) 
   ? " It is correct!"
   : " It is not correct!";

echo '<br>';

$SimClGer = new SimpleClass('German','Hallo', 'mein');
$SimClGer->add_world('Welt!');
$SimClGer->count();
$SimClGer->count();
$SimClGer->count();
$SimClGer->check_lang();

echo "$SimClGer->lang: {$SimClGer->hello}, {$SimClGer->my} {$SimClFr->world}. No.{$SimClGer->count}";

echo ($SimClEng->correct_lang) 
   ? " It is correct!"
   : " It is not correct!";