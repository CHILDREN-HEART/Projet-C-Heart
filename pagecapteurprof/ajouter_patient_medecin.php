<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="ajouter_patient_medecin.css">
    <title></title>
</head>
<body>
<header>
    <?php include('../header_footer/header2.php'); ?>
</header>
<div class="btn_retour">
    <a href=".\index.php"> &#10229 Retour</a>
</div>
<div class="title_container">
    <h1>Liste des élèves inscrits</h1>
</div>
<div class="gestion_container">
    <table id="table_gestion">
        <thead>
        <tr>
            <th height='20'>ID</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include('readpatient.php');
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
            ?>
            <tr>
                <td><?php echo htmlspecialchars($row['ID']); ?></td>
                <td><?php echo htmlspecialchars($row['prenom']); ?></td>
                <td><?php echo htmlspecialchars($row['nom']); ?></td>
                <td id="case_mail"><?php echo htmlspecialchars($row['mail']); ?></td>
                <td>
                    <div class="btn_container"><a id="action" href="ajouterpatient.php?id=<?php echo $row['ID']; ?>">ajouter</a>
                    </div>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
<div class="btn_rechercher_container">
    <a href=".\rechercher_patient.php">Rechercher</a>
</div>
<div class="vide">
</div>
<footer>
    <?php include('../header_footer/footer1.php'); ?>
</footer>

</body>
</html>
