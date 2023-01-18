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
<!--    <link rel="stylesheet" href="../header_footer/footer1.css">-->
    <link rel="stylesheet" href="style.css"/>
</head>

<body>
<header>
    <?php include('../header_footer/header1.php'); ?>
</header>

<div class="menu">
    <div class="menu-item" id="Question1">
        <div href="#Question1" class="menu-item-header">
            Comment ça marche ?
        </div>
        <div class="menu-item-body">
            <div class="menu-item-body-content">
              Le bracelet C-Heart est composé de deux capteurs qui mesurent la fréquence cardiaque et la température de votre enfant. Ces données sont envoyées à notre site via Bluetooth. Vous pouvez ainsi suivre en temps réel l’état de santé de votre enfant. 

            </div>
        </div>
    </div>
    <div class="menu-item" id="Question2">
        <div href="#Question2" class="menu-item-header">
            Est-ce que cela représente un risque pour mon enfant ?

        </div>
        <div class="menu-item-body">
            <div class="menu-item-body-content">
            Les fabricants d'appareils Bluetooth doivent respecter certaines valeurs maximales concernant le rayonnement électromagnétique émis. Le rayonnement Bluetooth de notre bracelet est si faible qu'il est totalement inoffensif.
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="menu-item-header">
            Question 3
        </div>
        <div class="menu-item-body">
            <div class="menu-item-body-content">
                Lorem ipsum dolor sit amet. Nobis quae sit corrupti beatae a voluptatem alias.
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="menu-item-header">
            Question 4
        </div>
        <div class="menu-item-body">
            <div class="menu-item-body-content">
                Lorem ipsum dolor sit amet. Nobis quae sit corrupti beatae a voluptatem alias.
            </div>
        </div>
        <div class="menu-item">
            <div class="menu-item-header">
                Question 5
            </div>
            <div class="menu-item-body">
                <div class="menu-item-body-content">
                    Lorem ipsum dolor sit amet. Nobis quae sit corrupti beatae a voluptatem alias.
                </div>
            </div>
            <div class="menu-item">
                <div class="menu-item-header">
                    Question 6
                </div>
                <div class="menu-item-body">
                    <div class="menu-item-body-content">
                        Lorem ipsum dolor sit amet. Nobis quae sit corrupti beatae a voluptatem alias.
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        Question 7
                    </div>
                    <div class="menu-item-body">
                        <div class="menu-item-body-content">
                            Lorem ipsum dolor sit amet. Nobis quae sit corrupti beatae a voluptatem alias.
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-header">
                            Question 8
                        </div>
                        <div class="menu-item-body">
                            <div class="menu-item-body-content">
                                Lorem ipsum dolor sit amet. Nobis quae sit corrupti beatae a voluptatem alias.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-header">
                                Question 9
                            </div>
                            <div class="menu-item-body">
                                <div class="menu-item-body-content">
                                    Lorem ipsum dolor sit amet. Nobis quae sit corrupti beatae a voluptatem alias.
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-header">
                                    Question 10
                                </div>
                                <div class="menu-item-body">
                                    <div class="menu-item-body-content">
                                        Lorem ipsum dolor sit amet. Nobis quae sit corrupti beatae a voluptatem alias.
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-header-inv">
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-item-header-inv">
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