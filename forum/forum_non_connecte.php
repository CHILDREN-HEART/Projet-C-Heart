<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Forum</title>
    <link rel="shortcut icon" href="../assets/icons/logo.ico"/>
    <link rel="stylesheet" href="../assets/styles/components/header.css">
    <link rel="stylesheet" href="../header_footer/footer1.css">
    <link rel="stylesheet" href="../forum/pagedeform.css"/>
</head>
<body>

<header>
    <?php include('../header_footer/header1.php'); ?>
</header>

<h1>Forum</h1>
<div style="height: 2px; background: black; width: 95%; margin-left: auto; margin-right: auto;"></div>

<table>
    <thead>
    <tr>
        <th>Auteur</th>
        <th>Date</th>
        <th>Titre</th>
        <th>Lien</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include('read_forum.php');
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
        ?>
        <tr>
            <td><?php echo htmlspecialchars($row['nom'] . " " . $row['prenom']); ?></td>
            <td><?php echo htmlspecialchars($row['date']); ?></td>
            <td><?php echo htmlspecialchars($row['titre']); ?></td>
            <td><a href='./sujet_non_connecte.php?numero_article=<?php echo $row['numero_article']; ?>'><input type="submit"
                                                                                                  name="submit"
                                                                                                  value="Lire"></a>
        </tr>
    <?php endwhile; ?>
    </tbody>

</table>
<div class="vide">
</div>
<footer>
    <?php include('../header_footer/footer1.php'); ?>
</footer>
</body>
</html>