<?php 
$averyMovie = json_decode(file_get_contents('Models/movie_db.json'), true);
// var_dump($averyMovie);
$arrMovies=[];

foreach ($averyMovie as $key => $value) {
    array_push($arrMovies ,new Movie($value));
}
class Movie {
    public $adult;
    public $backdrop_path;
    public $genre_ids;
    public $id;
    public $original_language;
    public $original_title;
    public $overview;
    public $popularity;
    public $poster_path;
    public $release_date;
    public $title;
    public $video;
    public $vote_average;
    public $vote_count;

    public function __construct($array) {
        $this->adult = $array['adult'];
        $this->backdrop_path = $array['backdrop_path'];
        $this->genre_ids = $array['genre_ids'];
        $this->id = $array['id'];
        $this->original_language = $array['original_language'];
        $this->original_title = $array['original_title'];
        $this->overview = $array['overview'];
        $this->popularity = $array['popularity'];
        $this->poster_path = $array['poster_path'];
        $this->release_date = $array['release_date'];
        $this->title = $array['title'];
        $this->video = $array['video'];
        $this->vote_average = $array['vote_average'];
        $this->vote_count = $array['vote_count'];
    }
    public function getAll() {
        echo 'cazzetto';
    }

}

?>
<?php

