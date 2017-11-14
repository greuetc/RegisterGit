<?php
class Movie {
    public $name;
    public $datesortie;
    public $duree = 150 ;
    public $description;
    
    public function getName()
    {
        return $this->name;        
    }
    public function setName($name ="")
    {
        $this->name = $name;      
    }
    
}

$movie = new movie;

echo $movie->getName();
$movie ->setName("Star Wars 8 The Last Jedi");
echo $movie->getName();


