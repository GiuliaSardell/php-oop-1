<?php

class Movie {
  //variabili d'istanza
  public $title;
  public $actors;
  public $country;
  public $year;
  public $vote;

  //costruttore
  function __construct($_title, $_year)
  {
    $this->title = $_title;
    $this->year = $_year;
  }

  public function setVote($_vote) {
    $this->vote = $_vote;
  }

  public function getVote() {
    $stringVote = 'Eccellente';
    if ($this->vote <= 5) {
       $stringVote = 'Scarso';
    } else if ($this->vote <= 7) {
       $stringVote = 'Nella media';
    }
    return $stringVote;
  }

  // public function getString($arr) {
  //   return implode(" ",$arr);
  // }



}

// //creo le istanze/oggetti
// $titanic = new Movie('Titanic', 1998);
// // $titanic-> title = 'Titanic';
// $titanic-> country = 'USA';
// // $titanic-> year = 1998;

// $forrestGump = new Movie('Forrest Gump', 1994);
// // $forrestGump-> title = 'Forrest Gump';
// $forrestGump-> country = 'USA';
// // $forrestGump-> year = 1994;


// $harryPotter = new Movie('Harry Potter', 2001);
// // $harryPotter-> title = 'Harry Potter';
// $harryPotter-> country = 'Regno Unito';
// // $harryPotter-> year = 2001;





?>