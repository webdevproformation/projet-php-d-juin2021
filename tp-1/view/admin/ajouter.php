<h1>Ajouter un nouvel article</h1>
<form action="<?= WWW ?>admin/ajout" method="post">
    <div class="form-group">
        <label for="titre">titre</label>
        <input type="text" name="titre" class="form-control" id="titre">
    </div>
    <div>
        <label for="contenu">contenu</label>
        <textarea name="contenu" id="contenu" class="form-control"></textarea>
    </div>
    <div>
        <input type="submit" class="btn btn-dark mt-3">
    </div>
</form>