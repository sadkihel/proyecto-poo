<?php
require_once('animal.php');
class gato extends animal{
 private $tamaño_bigote;

 public function __construct($id,$nombre,$tamaño_bigote)
 {
    parent:: __construct($id,$nombre,$persona);
    $this->tamaño_bigote=$tamaño_bigote;
 }
 public function gettamaño_bigote()
 {
     return $this->tamaño_bigote;
 }
} 
