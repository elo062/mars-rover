<?php
// Une méthode est une fonction dans une classe
class Hello {

  public $greetings = 'Bonjour cher Filou';
  public $name;
  // On récupère le nom dans les paramètres de construct
  public function __construct($name){
    $this->greetings = 'Bonjour cher ' . $name ;
    $this->name = $name;
  }

// On créé la méthode getName utilisée dans HelloTest.php :
  public function getName(){
    return $this->name;
  }

// // On s'entraine encore à créer des méthodes :
// // Ici la valeur par défaut de sauce sera carbonara
//   public function mangerDesPates($sauce="carbonara"){
//     return "Je vais manger des pâtes " . $sauce;
//   }
//   mangerDesPates("Bolognaise"); // rerournera cette sauce
}
