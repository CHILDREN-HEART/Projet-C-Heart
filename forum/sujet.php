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



      <footer>
  <?php include('../header_footer/footer1.php');?>
</footer>
  </body>
</html>
