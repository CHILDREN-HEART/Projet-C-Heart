<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CapteurProf</title>
    <link rel="shortcut icon" href="../assets/icons/logo.ico">
    <link rel="stylesheet" href="../assets/styles/base.css">
    <link rel="stylesheet" href="../header_footer/header2.css">
    <link rel="stylesheet" href="capteurParent/index.css">
    <link rel="stylesheet" href="../header_footer/footer1.css">
    <link rel="stylesheet" href="../assets/styles/capteurpa.css" />
    <link rel="stylesheet" href="pagecapteurprof/capteurprof.css" />


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
                <span class="titre3">Température</span>
                <span class="groschiffre">10</span>
                <span class="moyenchiffre">°C</span>
            </div>
        </div>
        <div style="height: 2px; background: black; width: 95%; margin-left: auto; margin-right: auto; margin-top: 50px; margin-bottom: 100px;"></div>

        <div class="search-component-container">
            <p class="titre4">Recherche elevée</p>
            <div class="separator"></div>
            <form action="verif-form.php" method="get">
                <input type="search" name="barre" id="barre">
                <input type="submit" name="btn" id="btn" value="Rechercher">
            </form>
        </div>
    </main>



    <footer>
        <?php include('../header_footer/footer1.php'); ?>
    </footer>

</body>
<script src="/capteurParent/index.js"></script>

</html>