<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Forum</title>
    <link rel="shortcut icon" href="./assets/Logo.png" />
    <link rel="stylesheet" href="../assets/styles/components/header.css">
    <link rel="stylesheet" href="../header_footer/footer1.css">
    <link rel="stylesheet" href="pagedeform.css" />
  </head>
  <body>

    <header>
    <?php include('../header_footer/header1.php');?>
  </header>
  
<h1>Forum</h1>
<div style="height: 2px; background: black; width: 95%; margin-left: auto; margin-right: auto;"></div>

  <table>
  <tr>
  <th>Auteur</th>
    <th>Date</th>
    <th>Titre</th>
    <th>Lien</th>
  </tr>
  <tr>
    <td>John Doe</td>
  <td>11 janvier 2021</td>
    <td>Titre 1</td>
    <td><input type="submit" name="submit" value="Lien1" href="./sujet.php"></td>
  </tr>
  <tr>
    <td>Jane Smith</td>
  <td>12 janvier 2021</td>
    <td>Titre 2</td>
    <td><input type="submit" name="submit" value="Lien2" href="./sujet.php"></td>
  </tr>
</table>

  <footer>
  <?php include('../header_footer/footer1.php');?>
</footer>
  </body>
</html>