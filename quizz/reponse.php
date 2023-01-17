<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>FAQ</title>
    <link rel="shortcut icon" href="./assets/Logo.png"/>
    <link rel="stylesheet" href="../assets/styles/components/header.css">
    <link rel="stylesheet" href="../header_footer/footer1.css">
    <link rel="stylesheet" href="reponse.css"/>
</head>

<body>
<header>
    <?php include('../header_footer/header1.php'); ?>
</header>

<div class="menu">
    <div class="menu-item" id="Question1">
        <div href="#Question1" class="menu-item-header">
            Réponse 1 : La fréquence cardiaque d'un enfant augmente avec l'âge.
        </div>
        <div class="menu-item-body">
            <div class="menu-item-body-content">
            Faux

            </div>
        </div>
    </div>
    <div class="menu-item" id="Question2">
        <div href="#Question2" class="menu-item-header">
        Réponse 2 : S'assoir permet-il d'augmenter la fiabilité du capteur de fréquence cardiaque?

        </div>
        <div class="menu-item-body">
            <div class="menu-item-body-content">
            Vrai
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="menu-item-header">
        Réponse 3 : Les établissements accueillants des enfants de moins de 6 ans ont pour obligation de surveiller la qualité de l'air dans leurs salles.
        </div>
        <div class="menu-item-body">
            <div class="menu-item-body-content">
            Vrai
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="menu-item-header">
            Réponse 4 : Les valeurs limites normatives de Co2 d'un espace clos se situe vers:
        </div>
        <div class="menu-item-body">
            <div class="menu-item-body-content">
            1000-1500ppm
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-item-header">
               Réponse 5 : 
            </div>
            <div class="menu-item-body">
                <div class="menu-item-body-content">
                
                </div>
            </div>
            <div class="menu-item">
                <div class="menu-item-header">
                Réponse 6 : Quelle est la marge d'erreur moyenne d'une prise de température avec un bracelet ?
                </div>
                <div class="menu-item-body">
                    <div class="menu-item-body-content">
                    6,7%
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                    Réponse 7 : Comment évacuer le CO2 dans une pièce ?
                    </div>
                    <div class="menu-item-body">
                        <div class="menu-item-body-content">
                        En ouvrant les fenêtres
                        </div>
                    </div>
                    
                                </div>
                                <script>
                                    const menuItemHeaders = document.querySelectorAll(".menu-item-header");

                                    menuItemHeaders.forEach(menuItemHeader => {
                                        menuItemHeader.addEventListener("click", event => {

                                            menuItemHeader.classList.toggle("active");
                                            const menuItemBody = menuItemHeader.nextElementSibling;
                                            if (menuItemHeader.classList.contains("active")) {
                                                menuItemBody.style.maxHeight = menuItemBody.scrollHeight + "px";
                                            } else {
                                                menuItemBody.style.maxHeight = 0;
                                            }

                                        });
                                    });

                                </script>
                            </div>
                        </div>
                        <footer>
                            <?php include('../header_footer/footer1.php'); ?>
                        </footer>
</body>
</html>