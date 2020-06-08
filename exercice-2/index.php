<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<p> Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>



<div class="flexible">


<form action="user.php" method="post" class="flex">

<label for="firstname">Nom</label>
<input type="text" name="firstname" id="firstname" placeholder="Votre Nom" required>

<label for="lastname">Prénom</label>
<input type="text" name="lastname" id="lastname"  placeholder="Votre Prénom" required>

<input type="submit" href="user.php" class="submit">

</form>


</div>
</body>
</html>
