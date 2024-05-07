<?php 
$everyMovie = json_decode(file_get_contents('movie_db.json'), true);
// var_dump($arrMovie);
$arrMovies=[];

foreach ($everyMovie as $key => $value) {
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
    }

}

echo $arrMovies[0]->adult;

