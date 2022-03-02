<?php
/* Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui: */
//| - è definita una classe ‘Movie’
//|    => all'interno della classe sono dichiarate delle variabili d'istanza
//|    => all'interno della classe è definito un costruttore
//|    => all'interno della classe è definito almeno un metodo
//| - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movies
{

   public $title;
   public $year;
   public $poster;
   public $protagonist;
   public $actor;
   public $rating;
   public $stars;

   public function __construct($title, $year, $poster, $protagonist, $actor, $rating)
   {
      $this->title = $title;
      $this->year = $year;
      $this->poster = $poster;
      $this->protagonist = $protagonist;
      $this->actor = $actor;
      $this->rating = $rating;
      $this->stars = $this->getStars();
   }

   public function getStars()
   {
      return $this->rating / 20;
   }
}

$movie1 = new Movies('American Psycho', 2000, 'https://m.media-amazon.com/images/M/MV5BZTM2ZGJmNjQtN2UyOS00NjcxLWFjMDktMDE2NzMyNTZlZTBiXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg', 'Patrick Bateman', 'Christian Bale', 85);

$movie2 = new Movies('Drive', 2011, 'https://m.media-amazon.com/images/I/81tdQqbCdWL._AC_SL1500_.jpg', 'The pilot', 'Ryan Gosling', 79);

var_dump($movie1);
var_dump($movie2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
   <link rel="stylesheet" href="./css/style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP-OOP-1</title>
</head>

<body>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-3">
            <div class="movie d-flex flex-column justify-content-between" style="background-image: url(<?= $movie1->poster ?>);">
               <h2 class="text-uppercase text-center"><?= $movie1->title ?></h2>
               <div>
                  <p>Anno di uscita: <?= $movie1->year ?></p>
                  <p>Protagonista-Attore: <?= "$movie1->protagonist - $movie1->actor" ?></p>
                  <p>Valutazione: <?= $movie1->stars ?></p>
               </div>
            </div>
         </div>
         <div class="col-3">
            <div class="movie d-flex flex-column justify-content-between" style="background-image: url(<?= $movie2->poster ?>);">
               <h2 class="text-uppercase text-center"><?= $movie2->title ?></h2>
               <div>
                  <p>Anno di uscita: <?= $movie2->year ?></p>
                  <p>Protagonista-Attore: <?= "$movie2->protagonist - $movie2->actor" ?></p>
                  <p>Valutazione: <?= $movie2->stars ?></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>