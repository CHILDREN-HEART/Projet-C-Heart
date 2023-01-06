<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <span class="minimize">&ndash;</span>
            <div id="chat"></div>
            <form method="post" action="message.php?sender=<?php echo $sender; ?>&recipient=<?php echo $recipient; ?>">
                <input type="text" name="message" placeholder="Entrez votre message">
                <input type="submit" name="submit" value="Envoyer">
            </form>
        </div>
    </div>
    <script src="modal.js"></script>
</body>
</html>