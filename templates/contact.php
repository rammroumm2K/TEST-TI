<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?=$title?></title>
</head>
<body>


<div id="global">
    <?php include 'inc/banniere.php'; ?>
   
  
<main >
    <h1>Pour nous contacter.</h1>
    <p><img src="img/contacts.jpg" alt=""></p>

    <p>Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous :</p>

    
<form action="">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>

    <br>

    <label for="ville">Ville :</label>
    <input type="text" id="ville" name="ville" required>

    <br>

    <label for="email">E-mail :</label>
    <input type="email" id="email" name="email" required>

    <br>

    <label for="commentaire">Commentaire :</label>
    <textarea id="commentaire" name="commentaire" rows="4" required></textarea>

    <br>

    <input type="submit" value="Envoyer votre message">
</form>


</main>
</div>
</body>
</html>