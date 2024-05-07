<?php
include __DIR__ .'/Views/header.php';
?>

<main>
<?php
  include __DIR__ .'/Models/Movie.php';
//   var_dump($arrMovies);
    
?>
<div class="container">
    <div class="row">
        <?php foreach ($arrMovies as $movie) {?>
            <div class="col col-4">
                
            </div>

        <?php } ?>
    </div>
</div>

<!-- <h2><?= $arrMovies[0]->title ?></h2> -->


</main>

<?php
include __DIR__ .'/Views/footer.php';
?>