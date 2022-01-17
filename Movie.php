<?php

class Movie {
  //variabili d'istanza
  public $title;
  // public $actors;
  public $country;
  public $year;

  //costruttore
  function __construct($_title, $_year)
  {
    $this->title = $_title;
    $this->year = $_year;
  }
}

//creo le istanze/oggetti
$titanic = new Movie('Titanic', 1998);
// $titanic-> title = 'Titanic';
$titanic-> country = 'USA';
// $titanic-> year = 1998;

$forrestGump = new Movie('Forrest Gump', 1994);
$forrestGump-> title = 'Forrest Gump';
$forrestGump-> country = 'USA';
$forrestGump-> year = 1994;


$harryPotter = new Movie('Harry Potter', 2001);
$harryPotter-> title = 'Harry Potter';
$harryPotter-> country = 'Regno Unito';
$harryPotter-> year = 2001;





?>