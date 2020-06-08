<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>


<?php if (isset($_POST['gender']) AND isset($_POST['firstname']) AND isset($_POST['lastname'])) { ?>

    <p><?= strip_tags($_POST['gender']) . " <br> " .  strip_tags($_POST['firstname']) . " <br> " . strip_tags($_POST['lastname']) ?></p>
   
    <?php } else { ?>

    <p><?= "Veuillez remplir les champs" ?></p>

    <?php } ?> 



</body>
</html>