<h1>Bienvenu sur mon site jour 2</h1>
<?php // var_dump($articles) ?>
<?php foreach($articles as $article  ) : ?>
    <div class="col-4">
        <article class="card mb-3">
            <header class="card-header">
                <h2><?= $article["titre"] ?></h2>
            </header>
            <img src="http://via.placeholder.com/300x100?text=<?= $article["id"] ?>" alt="">
            <div class="card-body">
                <?= $article["contenu"] ?>
            </div>
        </article>
    </div>
<?php endforeach ?>