<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 </title>
 

</head>
<body>

<p>
    
Créer un formulaire sur la page index.php avec :  

    Une liste déroulante pour la civilité (Mr ou Mme)
    Un champ texte pour le nom
    Un champ texte pour le prénom 

Ce formulaire doit rediriger vers la page index.php. 
Vous avez le choix de la méthode.


</p>

<form action="user.php" method="post">

<label for="firstname">Nom</label>
<input type="text" name="firstname" id="firstname" placeholder="Votre Nom" required>

<label for="lastname">Prénom</label>
<input type="text" name="lastname" id="lastname"  placeholder="Votre Prénom" required>

<SELECT name="gender">
    <OPTION>Homme
    <OPTION>Femme
    <OPTION>Autre
</SELECT>


<input type="submit" href="user.php" class="submit">

</form>



</body>
</html>
