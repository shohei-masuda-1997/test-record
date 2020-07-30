<?php

class Artists{
  private $name;
  private $genre;
  private $from;
  private $recommendation;
  public function __construct($name,$genre,$from,$recommendation){
    $this->name=$name;
    $this->genre=$genre;
    $this->from=$from;
    $this->recommendation=$recommendation;
  }

  public function getName(){
    return $this->name;
  }

  public function getGenre(){
    return $this->genre;
  }

  public function getFrom(){
    return $this->from;
  }

  public function getRecommendation(){
    return $this->recommendation;
  }

}

$artist_0=new Artists("TIM MAIA","FUNK","USA","https://www.youtube.com/embed/Plfuv81J8g4");
$artist_1=new Artists("LUTHER INGRAM","BLUES","USA","https://www.youtube.com/embed/yNX__MXRIrM");
$artist_2=new Artists("VAN MORRISON","POP","UK","https://www.youtube.com/embed/t_YGC_vA0Og");
$artist_3=new Artists("JOHNNY NASH","REGGAE","USA","https://www.youtube.com/embed/NkwJ-g0iJ6w");
$artist_4=new Artists("GRORGIE FAME","JAZZ","USA","https://www.youtube.com/embed/l0AC3yeelps");
$artist_5=new Artists("FRANKIE MILLER","ROCK","UK","https://www.youtube.com/embed/TeBu4187QW8");
$artists=[$artist_0,$artist_1,$artist_2,$artist_3,$artist_4,$artist_5];
