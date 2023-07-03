<?php

class films{
     public $author;
     public $year;
     public $cast;
     public static $counter = 0;
    public function __construct($author , $year , $cast){
            $this -> author = $author;

            $this -> year = $year;

            $this -> cast = $cast;

            self::$counter++;
     }

     public function filmsPresentation(){

        echo"L'autore del film si chiama : $this->author \nlanciato il suo film nel: $this->year \nil cast e formato da: $this->cast persone \n";
    
    }

    public static function filmsCounter(){
        echo"nel cast ci sono ". self::$counter . " persone ";
    }
}


 

$films1 = new films(" J.K.Rowling ","Harry potter e l'ordine della fenice ",  50);

$films2 = new films(" Stan Lee ","The Amazin Spider-Man ",  10);

$films3 = new films(" Walt Disney "," Il Re Leone ", 9);

echo films::$counter . "\n";

films::filmsCounter();

echo films::$counter . "\n";

$films1 -> filmsPresentation();

$films2 -> filmsPresentation();

$films3 -> filmsPresentation();