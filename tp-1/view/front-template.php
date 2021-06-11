<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--  view créer un fichier front-template.php 
    dans ce fichier structure de page html 
    dans la balise head du fichier ajouter la balise link de bootstrap 
    google > bootstrap > getbootstrap.com > get started bouton violet > css copy -->
</head>
<body>
    <div class="container">
        <header class="row">
            <nav class="navbar navbar-expand navbar-light bg-light col">
                <a href="<?= WWW ?>accueil/index" class="navbar-brand">TP PHP POO</a>
            </nav>
        </header>
        <main class="row">
            <?= $_content_for_template ?>
        </main>
    </div>
</body>
</html>