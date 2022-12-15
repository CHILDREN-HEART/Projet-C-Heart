<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Page d'accueil</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="assets/styles/base.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>

<?php

if ( empty(session_id()) ) session_start();
$connected = isset($_SESSION['user']) ?? null;

if (!$connected) {
    require("pages/guest_homepage.php");
} else {
    require("pages/connected_homepage.php");
}

?>

</body>
</html>
