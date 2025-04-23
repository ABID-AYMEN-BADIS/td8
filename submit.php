<?php
$lastname = strtoupper(htmlspecialchars($_POST['lastname']));
$firstname = strtoupper(htmlspecialchars($_POST['firstname']));
$age = htmlspecialchars($_POST['age']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
</head>
<body>
    <h1>Merci !</h1>
    <p>Vous avez soumis :</p>
    <ul>
        <li><strong>Nom :</strong> <?= $lastname ?></li>
        <li><strong>Prénom :</strong> <?= $firstname ?></li>
        <li><strong>Âge :</strong> <?= $age ?></li>
    </ul>
</body>
</html>
