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
    <link rel="stylesheet" href="../assets/styles/components/footer.css">
    <link rel="stylesheet" href="style.css"/>
</head>

<body>
<header>
    <?php include('../header_footer/header1.php'); ?>
</header>

<div class="menu">
    <div class="menu-item" id="Question1">
        <div href="#Question1" class="menu-item-header">
            Comment jumeler sa montre avec son compte ?
        </div>
        <div class="menu-item-body">
            <div class="menu-item-body-content">
                Il est très simple de synchroniser la montre à votre compte, un code vous sera fourni lors de
                l'acquisition de la montre. Il suffira d'aller votre compte et mettre ce code pour jumeler les deux
                ensemble.

            </div>
        </div>
    </div>
    <div class="menu-item" id="Question2">
        <div href="#Question2" class="menu-item-header">
            Le délai de préparation et d’envoi des commandes ?

        </div>
        <div class="menu-item-body">
            <div class="menu-item-body-content">
                Dès la commande valider, la montre partira en fabrication. Compter une à deux semaines pour la réception
                de votre commande.
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