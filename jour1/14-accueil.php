<h1><?= $titre ?></h1>
<?php foreach($derniers_articles as $article) : ?>
    <div class="col-4">
        <article class="border border-danger p-3 text-center">
            <h2><?= $article["titre"] ?></h2>
            <p><?= $article["contenu"] ?></p>
            <a href="#" class="btn btn-success">lire l'article <?= $article["id"] ?></a>
        </article>
    </div>
   
<?php endforeach ?>