<?php
include __DIR__ . '/Views/header.php';
?>

<main>
    <?php
    include __DIR__ . '/Models/Movie.php';
    //   var_dump($arrMovies);
    
    ?>
    <div class="container">
        <div class="row">
            <?php foreach ($arrMovies as $movie) { ?>
                <div class="col col-4">
                <div class="card sscard">
                    <img src="<?=$movie->backdrop_path?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$movie->title?></h5>
                        <p class="card-text"><?=$movie->overview?></p>
                        <h6>original language : <?=$movie->original_language?></h6>
                        
                    </div>
                </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/Views/footer.php';
?>