<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 </title>
 

</head>
<body>

<p>
   Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, 
   le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire,
   c'est l'inverse.  

   N'utiliser qu'une seule page.

</p>


<?php if (isset($_POST['gender']) AND isset($_POST['firstname']) AND isset($_POST['lastname'])) { ?>

    <p><?= strip_tags($_POST['firstname']) . " <br> " .  strip_tags($_POST['lastname']) . " <br> " . strip_tags($_POST['gender']) ?></p>

<?php } else { ?>

    <form action="index.php" method="post">

    <label for="firstname">Nom</label>
    <input type="text" name="firstname" id="firstname" placeholder="Votre Nom" required>

    <label for="lastname">Prénom</label>
    <input type="text" name="lastname" id="lastname"  placeholder="Votre Prénom" required>

    <Select name="gender">
        <option>Homme
        <option>Femme
        <option>Autre
    </select>

<input type="submit" href="index.php">

</form>


<?php } ?> 


</body>
</html>
