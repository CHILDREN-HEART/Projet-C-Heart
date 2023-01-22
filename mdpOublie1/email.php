<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$host = "herogu.garageisep.com";
$dbname = "tw7TQUoQ7u_cheart";
$username = "HCjpLtsbkh_cheart";
$password = "dRQscVBnTH6HWDYK";

//$host = "localhost";
//$dbname = "c_heart";
//$username = "root";
//$password = "";

//$base_url = "http://localhost/c_heart/";

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

        $statement = $mysqlInstance->prepare("SELECT * FROM utilisateur WHERE mail = :email");
        $statement->execute([
            'email' => $_POST['email']
        ]);

        $data = $statement->fetchAll();

        if (count($data) == 0) {
            header('Location: index.php?error=invalid_email');
            exit();
        }

        // Générez un jeton de réinitialisation de mot de passe unique
        $token = bin2hex(random_bytes(32));

        // Enregistrez le jeton de réinitialisation de mot de passe dans votre base de données
        $query = $mysqlInstance->prepare("UPDATE utilisateur SET reset_password_token = :token WHERE mail = :email");
        $query->execute(['token' => $token, 'email' => $email]);

        require '../PHPMailer-master/src/Exception.php';
        require '../PHPMailer-master/src/PHPMailer.php';
        require '../PHPMailer-master/src/SMTP.php';

        $base_url = "https://cheart.herogu.garageisep.com/mdpOublie2/";

        $email = new PHPMailer(true);

        try {
            $email->SMTPDebug = SMTP::DEBUG_SERVER;
            $email->IsSMTP();
            $email->Host = 'smtp-relay.sendinblue.com';               //Adresse IP ou DNS du serveur SMTP
            $email->Port = 587;                          //Port TCP du serveur SMTP
            $email->SMTPAuth = 1;                        //Utiliser l'identification

            if ($email->SMTPAuth) {
                $email->SMTPSecure = 'tls';               //Protocole de sécurisation des échanges avec le SMTP
                $email->Username = 'minitableau2002@gmail.com';   //Adresse email à utiliser
                $email->Password = '6sV9OrBEcqL5zZwj';         //Mot de passe de l'adresse email à utiliser

            }

            $email->CharSet = 'UTF-8'; //Format d'encodage à utiliser pour les caractères
            $email->addAddress($_POST['email']);
            $email->From = 'no-reply@cheart.com';                //L'email àx afficher pour l'envoi
            $email->FromName = 'Contact de C-Heart';             //L'alias à afficher pour l'envoi
            $email->Subject = 'Réinitialisation de votre mot de passe';                      //Le sujet du mail
            $email->WordWrap = 50;                               //Nombre de caracteres pour le retour a la ligne automatique
            $email->Body = "Suivez ce lien pour réinitialiser votre mot de passe : " . $base_url . "index.php?token=" . $token;           //Texte brut
            $email->IsHTML(false);                                  //Préciser qu'il faut utiliser le texte brut
            $email->send();
            header("Location: index.php?success=success");
            exit();



        } catch (Exception) {
            echo "Message non envoyé. Erreur : {$email->ErrorInfo}";
        }
    }


//        // Préparez l'email à envoyer
//        $to = $email;
//        $subject = "Réinitialisation de votre mot de passe";
//        $msg = "Suivez ce lien pour réinitialiser votre mot de passe : " . $base_url . "reset_password.php?token=" . $token;
//        $headers = "From: no-reply@example.com";
//
//        // Envoyez l'email
//        mail($to, $subject, $msg, $headers);
//
//        exit;

    // Redirigez l'utilisateur vers la page de connexion avec un message indiquant que l'email de réinitialisation de mot de passe a été envoyé
//    header("Location: ../pages/connexion.php?reset=success");
//    exit;

}

//header('Location: ./index.php?error=missing_data');



