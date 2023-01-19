<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quizz</title>
    <link rel="stylesheet" href="quizz.css" />
</head>

<body>
    <header>
        <?php require "../header_footer/header1.php"; ?>
    </header>

    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
            <h2 id="question">Question text</h2>
            <ul id="answers">
            </ul>
        </div>
    </div>
    <div class="buttons-container" style="display: flex; justify-content: center;">
        <input type="submit" id="submit" value="Valider" class="validé">
    </div>

    </div>
    </div>
    <script src="quizz.js"></script>
    <div>
    </div>
    <footer>
        <?php include('../header_footer/footer1.php'); ?>
    </footer>
</body>

</html>