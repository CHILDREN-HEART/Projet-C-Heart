<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>FAQ</title>
    <link rel="shortcut icon" href="./assets/Logo.png" />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header>
      <span id="titre1">FAQ</span>
      <span id="img2"
        ><img src="../assets/Logo.png" height="126" width="126" alt="Logo"
      /></span>
      <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic"
      />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"
      />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css"
      />
    </header>

    <div class="menu">
      <div class="menu-item" id="Question1">
        <div href="#Question1" class="menu-item-header">
          Comment jumeler sa montre avec son compte ?
        </div>
        <div class="menu-item-body">
          <div class="menu-item-body-content">
            Il est très simple de synchroniser la montre à votre compte, un code vous sera fourni lors de l'acquisition de la montre. Il suffira d'aller votre compte et mettre ce code pour jumeler les deux ensemble.
    
          </div>
        </div>
      </div>
      <div class="menu-item" id="Question2">
        <div href="#Question2"class="menu-item-header">
          Le délai de préparation et d’envoi des commandes ?
    
        </div>
        <div class="menu-item-body">
          <div class="menu-item-body-content">
            Dès la commande valider, la montre partira en fabrication. Compter une à deux semaines pour la réception de votre commande.
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
      </div>
      <script>
        const menuItemHeaders = document.querySelectorAll(".menu-item-header");
    
    menuItemHeaders.forEach(menuItemHeader => {
      menuItemHeader.addEventListener("click", event => {
        
        menuItemHeader.classList.toggle("active");
        const menuItemBody = menuItemHeader.nextElementSibling;
        if(menuItemHeader.classList.contains("active")) {
          menuItemBody.style.maxHeight = menuItemBody.scrollHeight + "px";
        }
        else {
          menuItemBody.style.maxHeight = 0;
        }
        
      });
    });
    
      </script>
    </div>
</div>
<footer>
  <div class="btn-group">
    <a href="../forum/index.php">
    <button class="button2">Forum</button></a>
    <a href="./index.php">
    <button class="button4">Contacter un admin</button></a>
  </div>
</div>
</footer>
</body>
</html>