<?php
/* Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui: */
//| - è definita una classe ‘Movie’
//|    => all'interno della classe sono dichiarate delle variabili d'istanza
//|    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movies
{

   public $title;
   public $year;
   public $poster;
   public $protagonist;
   public $actor;

   public function __construct($title, $year, $poster, $protagonist, $actor)
   {
      $this->title = $title;
      $this->year = $year;
      $this->poster = $poster;
      $this->protagonist = $protagonist;
      $this->actor = $actor;
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP-OOP-1</title>
</head>

<body>

</body>

</html>