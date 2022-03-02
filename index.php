<?php 
class Movie
{
public $title;
public $genre;
public $rate;

public function __construct($title, $genre, $rate, $thought =''){
    $this->title = $title;
    $this->genre = $genre;
    $this->rate = $rate;
}

public function getTitle(){
    return $this->title;
}

public function getGenres(){
    return $this->genre;
}

public function getRates(){
    return $this->rate;
}

public function getThought(){
    return $this->thought;
}

public function goodMovie(){
    if($this->rate > 7){
        $this->thought = ' Is a good film';
    } else {
        $this->thought = ' Is not a good film';
    }
}

}

$movie1 = new Movie('I am legend.', ' adventure ', 10);
$movie2 = new Movie('Batman Begins.', ' adventure ', 6);

$movie1->goodMovie();
echo $movie1->getTitle();
echo $movie1->getGenres();
echo $movie1->getRates();
echo $movie1->getThought();

/* var_dump($movie1); */

$movie2->goodMovie();
echo $movie2->getTitle();
echo $movie2->getGenres();
echo $movie2->getRates();
echo $movie2->getThought();

/* var_dump($movie2); */

?>