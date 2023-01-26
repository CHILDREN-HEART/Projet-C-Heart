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
    <link rel="stylesheet" href="style.css"/>
</head>

<body>
<div>
    <header>
        <?php include('../header_footer/header1.php'); ?>
    </header>
    <main class="menu">
        <div class="menu-item" id="Question1">
            <div href="#Question1" class="menu-item-header">
                Comment ça marche ?
            </div>
            <div class="menu-item-body">
                <div class="menu-item-body-content">
                    Le bracelet C-Heart est composé de deux capteurs qui mesurent la fréquence cardiaque et la
                    température
                    de votre enfant. Ces données sont envoyées à notre site via Bluetooth. Vous pouvez ainsi suivre en
                    temps
                    réel l’état de santé de votre enfant.

                </div>
            </div>
        </div>
        <div class="menu-item" id="Question2">
            <div href="#Question2" class="menu-item-header">
                Est-ce que cela représente un risque pour mon enfant ?

            </div>
            <div class="menu-item-body">
                <div class="menu-item-body-content">
                    Les fabricants d'appareils Bluetooth doivent respecter certaines valeurs maximales concernant le
                    rayonnement électromagnétique émis. Le rayonnement Bluetooth de notre bracelet est si faible qu'il
                    est
                    totalement inoffensif.
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-item-header">
                Quelle est la mission de l'entreprise C-Heart?
            </div>
            <div class="menu-item-body">
                <div class="menu-item-body-content">
                    La mission de C-Heart est d'informer les professeurs et les parents sur la santé et le bien-être des
                    enfants en leur donnant accès à une technologie qui capture les conditions de vie dans les
                    établissements scolaires.
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-item-header">
                Comment C-Heart s'assure-t-elle de la qualité des informations qu'elle fournit?
            </div>
            <div class="menu-item-body">
                <div class="menu-item-body-content">
                    C-Heart s'assure de la qualité des informations en utilisant des technologies de pointe et en
                    travaillant en étroite collaboration avec les professionnels de la santé et de l'éducation.
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-item-header">
                Quels types d'informations C-Heart fournit-elle aux professeurs et aux parents?
            </div>
            <div class="menu-item-body">
                <div class="menu-item-body-content">
                    C-Heart fournit des informations sur les conditions de vie dans les établissements scolaires,
                    notamment sur la santé et le bien-être des enfants.
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-item-header">
                Comment les établissements scolaires peuvent-ils utiliser les informations fournies par C-Heart?
            </div>
            <div class="menu-item-body">
                <div class="menu-item-body-content">
                    Les établissements scolaires peuvent utiliser les informations fournies par C-Heart pour
                    identifier les problèmes potentiels et prendre des mesures pour améliorer les conditions de vie
                    des enfants.
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-item-header">
                Est-ce que les informations fournies par C-Heart sont confidentielles?
            </div>
            <div class="menu-item-body">
                <div class="menu-item-body-content">
                    Oui, les informations fournies par C-Heart sont confidentielles et protégées par la loi sur
                    la protection des données.
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-item-header">
                Est-ce que C-Heart offre des services de soutien aux enfants et aux familles?
            </div>
            <div class="menu-item-body">
                <div class="menu-item-body-content">
                    C-Heart offre des services de soutien aux enfants et aux familles en leur donnant
                    indirectement
                    accès à des professionnels de la santé et de l'éducation.
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-item-header">
                Est-ce que C-Heart propose des formations pour les enseignants et les parents?
            </div>
            <div class="menu-item-body">
                <div class="menu-item-body-content">
                    Oui, C-Heart propose des formations pour les enseignants et les parents pour les
                    aider à mieux comprendre les besoins de leurs enfants et à améliorer les conditions
                    de vie dans les établissements scolaires.
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-item-header">
                Est-ce que C-Heart travaille en collaboration avec d'autres organisations pour
                améliorer les conditions de vie des enfants?
            </div>
            <div class="menu-item-body">
                <div class="menu-item-body-content">
                    Oui, C-Heart travaille en étroite collaboration avec d'autres organisations pour
                    améliorer les conditions de vie des enfants en établissements scolaires.
                </div>
            </div>
        </div>
        <div class="vide">
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
    </main>
    <footer id="footer">
        <?php include('../header_footer/footer1.php'); ?>
    </footer>
</div>
</body>

</html>