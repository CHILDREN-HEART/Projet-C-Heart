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
    <link rel="shortcut icon" href="./assets/Logo.png"/>
    <link rel="stylesheet" href="../assets/styles/components/header.css">
    <link rel="stylesheet" href="../header_footer/footer1.css">
    <link rel="stylesheet" href="pagedeform.css"/>
</head>
<body>

<header>
    <?php include('../header_footer/header1.php'); ?>
</header>

<h1>Forum</h1>
<div style="height: 2px; background: black; width: 95%; margin-left: auto; margin-right: auto;"></div>
<form action="forum_cree_article.php" method="post">
    <label for="titre">Titre:</label>
    <textarea id="titre" name="titre"></textarea>
    <label for="message">Message:</label>
    <textarea id="message" name="message"></textarea>
    <br>
    <input type="submit" name="submit" value="Ajouté">
</form>
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
            <td height='50'><?php echo htmlspecialchars($row['nom'] . " " . $row['prenom']); ?></td>
            <td><?php echo htmlspecialchars($row['date']); ?></td>
            <td><?php echo htmlspecialchars($row['titre']); ?></td>
            <td><a href='./sujet.php?numero_article=<?php echo $row['numero_article']; ?>'><input type="submit"
                                                                                                  name="submit"
                                                                                                  value="Lien"></a>
        </tr>
    <?php endwhile; ?>
    </tbody>

</table>

<footer>
    <?php include('../header_footer/footer1.php'); ?>
</footer>
</body>
</html>