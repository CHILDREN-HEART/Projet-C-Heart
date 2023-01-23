<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CapteurParent</title>
    <link rel="shortcut icon" href="../assets/icons/logo.ico">
    <link rel="stylesheet" href="../assets/styles/base.css">
    <link rel="stylesheet" href="../assets/styles/components/header.css">
    <link rel="stylesheet" href="/capteurParent/index.css">
    <link rel="stylesheet" href="../header_footer/footer1.css">
    <link rel="stylesheet" href="../assets/styles/capteurpa.css" />


</head>

<body>
    <header>
        <?php include('../header_footer/header2.php'); ?>
    </header>

    <main>
        <h2>Informations de l'enfant</h2>
        <div style="height: 2px; background: black; width: 95%; margin-left: auto; margin-right: auto;"></div>
        <div class="conteneur" style="max-width:700px">
            <div class="conteneurchild">
                <span class="titre3">Fréquence Cardiaque</span>
                <span class="groschiffre">10</span>
                <span class="moyenchiffre">bpm/min</span>
            </div>

            <div class="dividerTemp"></div>
            <div class="conteneurchild">
                <span class="titre3">Température</span>
                <span class="groschiffre">10</span>
                <span class="moyenchiffre">°C</span>
            </div>
        </div>
        <div style="height: 2px; background: black; width: 95%; margin-left: auto; margin-right: auto;"></div>
        <div style="height: 50px;"></div>
        <div class="conteneur">
            <div class="conteneurchild">
                <span class="titre3">Fréquence Cardiaque</span>
                <canvas id="canvas">
            </div>

            <div class="divider"></div>
            <div class="conteneurchild">
                <span class="titre3">Température</span>
                <canvas id="canvas2">
            </div>
        </div>
        <div style="height: 50px;"></div>
        <div style="height: 2px; background: black; width: 95%; margin-left: auto; margin-right: auto;"></div>
        <div style="height: 150px;"></div>
        <div class="vide">
        </div>
    </main>


    <footer>
        <?php include('../header_footer/footer1.php'); ?>
    </footer>

</body>
<script src="/capteurParent/index.js"></script>

</html>