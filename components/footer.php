<link rel="stylesheet" href="../assets/styles/components/footer.css">
<!--<link rel="stylesheet" href="../header_footer/footer1.css">-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<div class="flexboxFooter">
    <div class="flexboxFooter1">
        <div class="btn-footer">
            <a href="../faq"><input type="button" value="FAQ" /></a>
        </div>
        <div style="background: white; height: 40px; width: 2px;"></div>
        <div class="btn-footer">
            <?php

            $connected = isset($_SESSION['user']) ?? null;
            if ($connected) {
                echo '<a href="./forum/forum.php"><input type="button" value="Forum"/></a>';
            } else {
                echo '<a href="./forum/forum_non_connecte.php"><input type="button" value="Forum"/></a>';
            }
            ?>
        </div>
        <div style="background: white; height: 40px; width: 2px;"></div>
        <div class="btn-footer">
            <a href="./quizz/quizz.php"><input type="button" value="Quizz" /></a>
        </div>
    </div>