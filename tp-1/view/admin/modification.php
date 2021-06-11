<h1>Modifier l'article numéro <?= $article->id ?></h1>
<form action="<?= WWW ?>admin/modif/<?= $article->id ?>" method="post">
    <div class="form-group">
        <label for="titre">titre</label>
        <input type="text" name="titre" class="form-control" id="titre" value="<?= $article->titre ?>">
    </div>
    <div>
        <label for="contenu">contenu</label>
        <textarea name="contenu" id="contenu" class="form-control"><?= $article->contenu ?></textarea>
        <input type="hidden" name="id" value="<?= $article->id ?>">
    </div>
    <div>
        <input type="submit" class="btn btn-dark mt-3">
    </div>
</form>