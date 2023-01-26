<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>CapteurProf</title>
    <link rel="shortcut icon" href="../assets/icons/logo.ico">
    <link rel="stylesheet" href="../assets/styles/base.css">
    <link rel="stylesheet" href="../assets/styles/components/header.css">
    <link rel="stylesheet" href="../header_footer/footer1.css">
    <link rel="stylesheet" href="../assets/styles/capteurpa.css"/>
    <link rel="stylesheet" href="gestion_eleve.css">
</head>

<body>
<header>
    <?php include('../header_footer/header2.php'); ?>
</header>

<main>
    <h2>Informations sur la salle</h2>
    <div style="height: 2px; background: black; width: 95%; margin-left: auto; margin-right: auto;"></div>
    <div class="conteneur" style="max-width:700px">
        <div class="conteneurchild">
            <span class="titre3">Qualité de l'air (taux de CO2)</span>
            <span class="groschiffre">10</span>
            <span class="moyenchiffre">PPM</span>
        </div>

        <div class="divider"></div>
        <div class="conteneurchild">
            <span class="titre3">Température       (de la classe)</span>
            <span class="groschiffre">10</span>
            <span class="moyenchiffre">°C</span>
        </div>
    </div>
    <div style="height: 50px;"></div>
    <div style="height: 2px; background: black; width: 95%; margin-left: auto; margin-right: auto; margin-top: 50px;"></div>
    <div style="height: 50px;"></div>
    <div class="title_container">
        <h1>Ma classe</h1>
    </div>
    <div class="gestion_container">

        <table id="table_gestion">
            <thead>
            <tr>
                <th>ID</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include('read.php');
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['ID']); ?></td>
                    <td><a id="prenomTableau" href="../capteurParent/index.php"><?php echo htmlspecialchars($row['prenom']); ?></a></td>
<!-- Lorsque la table capteur sera faite alors faire la request SQL qui permet de voir les informations de l'élève en question-->
                    <td><?php echo htmlspecialchars($row['nom']); ?></td>
                    <td id="case_mail"><?php echo htmlspecialchars($row['mail']); ?></td>
                    <td>
                        <div class="btn_container"><a id='action' href="supprimer.php?id=<?php echo $row['ID']; ?>">Supprimer</a>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <div class="btn_gestion_container">
        <ul class="list_btn" id="list_btn">
            <li class="list_btn_att">
                <a href=".\ajouter_eleve_classe.php">Ajouter</a>
            </li>
        </ul>
    </div>
    <div class="vide">
    </div>
</main>

<div class="vide">
</div>
<footer>
    <?php include('../header_footer/footer1.php'); ?>
</footer>

</body>

<script src="/capteurParent/index.js"></script>

</html>