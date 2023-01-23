<?php

require_once('../utils/database.php');

$test_nom = FALSE;
$test_prenom = FALSE;
$test_email = FALSE;

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];

$prenom = ucwords($prenom);
$nom = ucwords($nom);

if (empty($prenom) == FALSE) {
    $test_prenom = TRUE;
}
if (empty($nom) == FALSE) {
    $test_nom = TRUE;
}
if (empty($email) == FALSE) {
    $test_email = TRUE;
}

if ($test_prenom == TRUE and $test_nom == FALSE and $test_email == False) {
    $sql = 'SELECT * FROM utilisateur WHERE ID NOT IN (SELECT ID FROM classe) and prenom like ?';
    $stmt = $mysqlInstance->prepare($sql);
    $stmt->execute([$prenom]);
} else if ($test_prenom == FALSE and $test_nom == TRUE and $test_email == False) {
    $sql = 'SELECT * FROM utilisateur WHERE ID NOT IN (SELECT ID FROM classe) and nom like ?';
    $stmt = $mysqlInstance->prepare($sql);
    $stmt->execute([$nom]);
} else if ($test_prenom == FALSE and $test_nom == FALSE and $test_email == TRUE) {
    $sql = 'SELECT * FROM utilisateur WHERE ID NOT IN (SELECT ID FROM classe) and mail like ?';
    $stmt = $mysqlInstance->prepare($sql);
    $stmt->execute([$email]);
} else if ($test_prenom == TRUE and $test_nom == TRUE and $test_email == False) {
    $sql = 'SELECT * FROM utilisateur WHERE ID NOT IN (SELECT ID FROM classe) and (prenom like ? and nom like ?)';
    $stmt = $mysqlInstance->prepare($sql);
    $stmt->execute([$prenom, $nom]);
} else if ($test_prenom == TRUE and $test_nom == FALSE and $test_email == TRUE) {
    $sql = 'SELECT * FROM utilisateur WHERE ID NOT IN (SELECT ID FROM classe) and (prenom like ? and mail like ?)';
    $stmt = $mysqlInstance->prepare($sql);
    $stmt->execute([$prenom, $email]);
} else if ($test_prenom == FALSE and $test_nom == TRUE and $test_email == TRUE) {
    $sql = 'SELECT * FROM utilisateur WHERE ID NOT IN (SELECT ID FROM classe) and (nom like ? and mail like ?)';
    $stmt = $mysqlInstance->prepare($sql);
    $stmt->execute([$nom, $email]);
} else if ($test_prenom == TRUE and $test_nom == TRUE and $test_email == TRUE) {
    $sql = 'SELECT * FROM utilisateur WHERE ID NOT IN (SELECT ID FROM classe) and (prenom like ? and nom like ? and mail like ?)';
    $stmt = $mysqlInstance->prepare($sql);
    $stmt->execute([$prenom, $nom, $email]);
} else {
    echo 'veuillez remplir des champs';
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="afficher_recherche.css">
    <title></title>
</head>
<body>
<header>
    <?php include('../header_footer/header2.php'); ?>
</header>
<div class="btn_retour">
    <a href=".\rechercher_patient.php">&#10229 Retour</a>
</div>
<div class="title_container">
    <h1>Résultat de votre recherche<h1>
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

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
            ?>
            <tr>
                <td><?php echo htmlspecialchars($row['ID']); ?></td>
                <td><?php echo htmlspecialchars($row['prenom']); ?></td>
                <td><?php echo htmlspecialchars($row['nom']); ?></td>
                <td id="case_mail"><?php echo htmlspecialchars($row['mail']); ?></td>
                <td>
                    <div class="btn_container"><a id='action' href="ajouterpatient.php?id=<?php echo $row['ID']; ?>">ajouter</a>
                    </div>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
<div class="vide">
</div>
<footer>
    <?php include('../header_footer/footer1.php'); ?>
</footer>
</body>
</html>