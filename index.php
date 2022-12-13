<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <link href="" rel="stylesheet"/>
    <title>page d'accueil</title>
    <link rel="stylesheet" href="pagedaccueil.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>-->
    <link rel="stylesheet" href="header_footer/header.css">
    <link rel="stylesheet" href="header_footer/footer.css">
</head>
<body>
<header>
    <?php include('header_footer/header.php'); ?>
</header>

<div class="carrousel">
  <div class="slide">
    <p>Slide 1</p>
  </div>
  <div class="slide">
    <p>Slide 2</p>
  </div>
  <div class="slide">
    <p>Slide 3</p>
  </div>
</div>
<button id="prev-button">Prev</button>
<button id="next-button">Next</button>
<footer>
    <?php include('header_footer/footer.php'); ?>
</footer>

</body>
</html>
