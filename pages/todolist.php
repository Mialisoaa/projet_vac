<?php
// Traitement du titre
$titre = "";
$taches = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["titre"])) {
        $titre = htmlspecialchars($_POST["titre"]);
    }

    if (!empty($_POST["tache"])) {
        $titre = htmlspecialchars($_POST["titre_hidden"] ?? "");
        $taches[] = htmlspecialchars($_POST["tache"]);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma To-Do List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Créer une To-Do List</h2>

    <!-- Formulaire du titre -->
    <form method="post" class="mb-4">
        <div class="input-group mb-3">
            <input type="text" name="titre" class="form-control" placeholder="Titre de la liste" required>
            <button class="btn btn-primary" type="submit">Valider le titre</button>
        </div>
    </form>

    <!-- Affichage du titre si défini -->
    <?php if (!empty($titre)) : ?>
        <h4 class="text-primary mb-3"><?= $titre ?></h4>

        <!-- Formulaire pour ajouter une tâche -->
        <form method="post" class="mb-3">
            <div class="input-group">
                <input type="text" name="tache" class="form-control" placeholder="Nouvelle tâche à faire" required>
                <input type="hidden" name="titre_hidden" value="<?= $titre ?>">
                <button class="btn btn-success" type="submit">Ajouter la tâche</button>
            </div>
        </form>

        <!-- Liste des tâches -->
        <ul class="list-group">
            <?php foreach ($taches as $tache): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $tache ?>
                    <span class="badge bg-secondary">À faire</span>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>

</body>
</html>
