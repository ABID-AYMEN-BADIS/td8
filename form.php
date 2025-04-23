<!-- form.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form action="submit.php" method="POST">
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" required><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
