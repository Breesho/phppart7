<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 </title>
 

</head>
<body>

<p>Avec le formulaire de l'exercice 2, afficher dans la page user.php
     les données du formulaire transmises.</p>






<form action="user.php" method="post">

<label for="firstname">Nom</label>
<input type="text" name="firstname" id="firstname" placeholder="Votre Nom" required>

<label for="lastname">Prénom</label>
<input type="text" name="lastname" id="lastname"  placeholder="Votre Prénom" required>

<input type="submit" href="user.php" class="submit">

</form>


</body>
</html>
