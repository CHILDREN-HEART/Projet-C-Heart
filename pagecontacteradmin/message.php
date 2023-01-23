<?php
require_once('../utils/database.php');

// Vérification de la soumission du formulaire
if (isset($_POST['submit'])) {
    // Récupération des variables GET
    $sender = $_GET['sender'];
    $recipient = $_GET['recipient'];
    // Récupération du message
    $message = $_POST['message'];

    // Création de la requête d'insertion
    $query = "INSERT INTO messages (sender, recipient, message, timestamp) VALUES (:sender, :recipient, :message, CURRENT_TIMESTAMP)";

    // Préparation de la requête
    $stmt = $mysqlInstance->prepare($query);

    // Liaison des paramètres
    $stmt->bindParam(':sender', $sender);
    $stmt->bindParam(':recipient', $recipient);
    $stmt->bindParam(':message', $message);

    // Exécution de la requête
    $stmt->execute();
}

// Récupération des variables GET
$sender = $_GET['sender'];
$recipient = $_GET['recipient'];

// Création de la requête de sélection
$query = "SELECT * FROM messages WHERE (sender=:sender AND recipient=:recipient) OR (sender=:recipient AND recipient=:sender) ORDER BY timestamp DESC LIMIT 10";

// Exécution de la requête
$stmt = $mysqlInstance->prepare($query);

// Liaison des paramètres
$stmt->bindParam(':sender', $sender);
$stmt->bindParam(':recipient', $recipient);

// Exécution de la requête
$stmt->execute();

// Récupération des résultats
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Inclusion de la fenêtre modale
include 'index.php';

// Bouton de chat
echo '<button onclick="showModal()">Ouvrir la fenêtre de chat</button>';

// Script AJAX pour mettre à jour le chat en temps réel
echo '<script>
setInterval(function() {
  // Envoi d\'une requête GET en AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "index.php?sender=' . $sender . '&recipient=' . $recipient . '");
  xhr.onload = function() {
      // Mise à jour de la zone de chat avec la réponse
      document.getElementById("chat").innerHTML = xhr.responseText;
  }
  xhr.send();
}, 1000); // Mise à jour toutes les secondes

// Fonction d\'affichage de la fenêtre modale
function showModal() {
    var modal = document.getElementById("modal");
    modal.style.display = "block";
}
</script>';