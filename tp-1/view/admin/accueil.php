<!-- créer view/admin/accueil.php -->
<h1>Bienvenu dans le back office de votre site</h1>

<div>
    <a href="<?= WWW ?>admin/ajout" class="btn btn-success my-4">Ajouter un nouvel article</a>
</div>

<table class="table table-striped">
    <tr>
        <th>id</th>
        <th class="w-75">titre article</th>
        <th>actions</th>
    </tr>
    <?php foreach ($articles as $article ) : ?>
        <tr>
            <td><?= $article->id ?></td>
            <td><?= $article->titre ?></td>
            <td>
                <a href="<?= WWW ?>admin/modif/<?= $article->id ?>" class="btn btn-warning">Modifier</a>
                <a href="<?= WWW ?>admin/suppr/<?= $article->id ?>" class="btn btn-danger ms-2">Supprimer</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>