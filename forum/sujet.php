<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>FAQ</title>
    <link rel="shortcut icon" href="./assets/Logo.png" />
    <link rel="stylesheet" href="../assets/styles/components/header.css">
    <link rel="stylesheet" href="../header_footer/footer1.css">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <header>
    <?php include('../header_footer/header1.php');?>
  </header>

  <?php
if (isset($_POST['submit'])) {
  $user = $_POST['user'];
  $message = $_POST['message'];

  $query = "INSERT INTO messages (user, message) VALUES ('$user', '$message')";
  mysqli_query($conn, $query);
}
?>
<h1>Forum</h1>

<div style="height: 2px; background: black; width: 95%; margin-left: auto; margin-right: auto;"></div>

 <form action="" method="post">
  <label for="user">Username:</label>
  <input type="text" id="user" name="user">
  <br>
  <label for="message">Message:</label>
  <textarea id="message" name="message"></textarea>
  <br>
  <input type="submit" name="submit" value="Validé">
  
</form>
<div class=sujet>
<table>
  <tr>
    <th>Utilisateur</th>
    <th>Message</th>
    <th>Date</th>
  </tr>
  <tr>
    <td>John Doe</td>
    <td>Salut tout le monde !</td>
    <td>11 janvier 2021</td>
  </tr>
  <tr>
    <td>Jane Smith</td>
    <td>Bienvenue John !</td>
    <td>11 janvier 2021</td>
  </tr>
  <tr>
    <td>Bob Johnson</td>
    <td>Merci Jane !</td>
    <td>12 janvier 2021</td>
  </tr>
</table>
</div>

      <footer>
  <?php include('../header_footer/footer1.php');?>
</footer>
  </body>
</html>
