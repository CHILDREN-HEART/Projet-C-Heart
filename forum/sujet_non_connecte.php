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
                <td><?php echo htmlspecialchars($row['nom'] . " " . $row['prenom']); ?></td>
                <td><?php echo htmlspecialchars($row['message']); ?></td>
                <td><?php echo htmlspecialchars($row['date']); ?></td>
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
