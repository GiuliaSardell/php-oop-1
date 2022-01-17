<?php
require_once __DIR__."/databaseMovies.php";
require_once __DIR__."/Movie.php";


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
  $new_movie->title = $movie['title'];
  $new_movie->country = $movie['country'];
  $new_movie->year = $movie['year'];
  ?>
  <p><strong>Titolo: </strong> <?php echo $new_movie->title ?> </p>
  <p><strong>Paese di produzione: </strong> <?php echo $new_movie->country ?> </p>
  <p><strong>Anno di uscita: </strong> <?php echo $new_movie->year ?> </p>

  <br>
  <br>

<?php endforeach ?>
</body>
</html>