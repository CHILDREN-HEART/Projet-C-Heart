<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="assets/styles/base.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>

<?php

session_start();
$connected = isset($_SESSION['user']) ?? null;

//echo $_SESSION['user'];

if (!$connected) {
    require("pages/guest_homepage.php");
} else {
//    require ("capteurParent/index.php"); pas encore op car pas responsive
    require("pages/connected_homepage.php");
}

?>

</body>
</html>
