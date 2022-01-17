<?php
require_once __DIR__."/databaseMovies.php";
require_once __DIR__."/Movie.php";


$titanic = new Movie('Titanic', 1998);
$titanic-> country = 'USA';
$titanic-> actors = "Leonardo Di Caprio, Kate Winslet";
$titanic-> vote = 5;

$forrestGump = new Movie('Forrest Gump', 1994);
$forrestGump-> country = 'USA';
$forrestGump-> actors = "Tom Hanks";
$forrestGump-> vote = 7;

$harryPotter = new Movie('Harry Potter', 2001);
$harryPotter-> country = 'Regno Unito';
$harryPotter-> actors = "Daniel Radcliffe, Rupert Grint, Emma Watson";
$harryPotter-> vote = 9;


var_dump($titanic);
var_dump($forrestGump);
var_dump($harryPotter);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>Movies</h1>

<?php foreach($movies as $movie) : 
  $new_movie = new Movie($movie['title'], $movie['year']);
  $new_movie->country = $movie['country'];
  $new_movie->actors = $movie['actors'];
  $new_movie->vote = $movie['vote'];
  ?>
  <p><strong>Titolo: </strong> <?php echo $new_movie->title ?> </p>
  <p><strong>Paese di produzione: </strong> <?php echo $new_movie->country ?> </p>
  <p><strong>Anno di uscita: </strong> <?php echo $new_movie->year ?> </p>
  <p><strong>Attori principali: </strong> 
  <?php foreach($new_movie->actors as $actor) : ?>
    <ul>
      <li>
        <?php echo $actor ?> </p>
      </li>
    </ul>
    
  <?php endforeach ?>
  <p><strong>Voto: </strong> <?php echo $new_movie->getVote() ?> </p>
  <br>
  <br>

<?php endforeach ?>
</body>
</html>