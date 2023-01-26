<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="rechercher_eleve.css">
    <title></title>

</head>
<body>
<header>
    <?php include('../header_footer/header2.php'); ?>
</header>
<div class="btn_retour">
    <a href=".\ajouter_eleve_classe.php"> &#10229 Retour</a>
</div>
<div class="title_container">
    <h1>Rechercher un élève<h1>
</div>
<div class="main_container">
    <div class="main">
        <form action="rechercher.php" method="post">
		<pre>
			<label>Nom</label><input type="text" name="nom">
			<label>Prénom</label><input type="text" name="prenom">
			<label>e-Mail</label><input type="email" name="email">
			<input id="btn_rechercher" type="submit" value="Rechercher">
		</pre>
        </form>
    </div>
    <div class=text_alert>
        <p>Veuillez remplir au minimum un champ
        <p>
    </div>
</div>
<div class="vide">
</div>
<footer>
    <?php include('../header_footer/footer1.php'); ?>
</footer>
</body>
</html>