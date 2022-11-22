<?php

session_start();

if (isset($_POST['login']) && isset($_POST['password'])) {
    if ($_POST['login'] == 'admin' && $_POST['password'] == 'admin') {
        $_SESSION['login'] = $_POST['login'];
        header('Location: admin.php');
    } else {
        echo '<b>Identifiants incorrects</b>';
    }
}
