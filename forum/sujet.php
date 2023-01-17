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

<h1>Sujet</h1>

<div style="height: 2px; background: black; width: 95%; margin-left: auto; margin-right: auto;"></div>


<div class=sujet>
    <table>
        <thead>
        <tr>
            <th>Auteur</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $numero_article = $_GET['numero_article'];
        include("read_forum_premier_message.php");
        $row = $stmt->fetch(PDO::FETCH_ASSOC)
            ?>
            <tr>
                <td><?php echo htmlspecialchars($row['nom'] . " " . $row['prenom']); ?></td>
                <td><?php echo htmlspecialchars($row['message']); ?></td>
                <td><?php echo htmlspecialchars($row['date']); ?></td>

            </tr>

        <?php
        include('read_forum_message.php');
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
            ?>
            <tr>
                <td height='50'><?php echo htmlspecialchars($row['nom'] . " " . $row['prenom']); ?></td>
                <td><?php echo htmlspecialchars($row['message']); ?></td>
                <td><?php echo htmlspecialchars($row['date']); ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
<!--        <tr>-->
<!--            <th>Utilisateur</th>-->
<!--            <th>Message</th>-->
<!--            <th>Date</th>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>John Doe</td>-->
<!--            <td>Salut tout le monde !</td>-->
<!--            <td>11 janvier 2021</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Jane Smith</td>-->
<!--            <td>Bienvenue John !</td>-->
<!--            <td>11 janvier 2021</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Bob Johnson</td>-->
<!--            <td>Merci Jane !</td>-->
<!--            <td>12 janvier 2021</td>-->
<!--        </tr>-->
    </table>
</div>
<form action="forum_cree_message.php?numero_article=<?php echo $numero_article; ?>" method="post">
    <label for="message">Message:</label>
    <textarea id="message" name="message"></textarea>
    <br>
    <input type="submit" name="submit" value="Validé">
</form>

<footer>
    <?php include('../header_footer/footer1.php'); ?>
</footer>
</body>
</html>
