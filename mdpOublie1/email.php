<?php
$host = "herogu.garageisep.com";
$dbname = "tw7TQUoQ7u_cheart";
$username = "HCjpLtsbkh_cheart";
$password = "dRQscVBnTH6HWDYK";

//$host = "localhost";
//$dbname = "c_heart";
//$username = "root";
//$password = "";

$base_url = "http://localhost/c_heart/";

if (isset($_POST['email'])) {
    if ($_POST['email'] == "") {
        header('Location: ./index.php?error=missing_data');
        exit();
    }

    $mysqlInstance = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        header('Location: index.php?error=invalid_email');
        exit();
    }

// Génère un jeton de réinitialisation de mot de passe et l'envoie par email
    if (!isset($_POST['reset_password'])) {
        // Récupérez l'adresse email de l'utilisateur
        $email = $_POST['email'];

        // Générez un jeton de réinitialisation de mot de passe unique
        $token = bin2hex(random_bytes(32));

        // Enregistrez le jeton de réinitialisation de mot de passe dans votre base de données
        $query = $mysqlInstance->prepare("UPDATE utilisateur SET reset_password_token = :token WHERE mail = :email");
        $query->execute(['token' => $token, 'email' => $email]);

        // Préparez l'email à envoyer
        $to = $email;
        $subject = "Réinitialisation de votre mot de passe";
        $msg = "Suivez ce lien pour réinitialiser votre mot de passe : " . $base_url . "reset_password.php?token=" . $token;
        $headers = "From: no-reply@example.com";

        // Envoyez l'email
        mail($to, $subject, $msg, $headers);

        // Redirigez l'utilisateur vers la page de connexion avec un message indiquant que l'email de réinitialisation de mot de passe a été envoyé
        header("Location: ../pages/connexion.php?reset=success");
        exit;
    }
}

header('Location: ./index.php?error=missing_data');



