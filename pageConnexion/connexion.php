<?php

if (isset($_POST['login']) && isset($_POST['password'])) {
    if ($_POST['login'] == 'admin' && $_POST['password'] == 'admin') {
        echo '<b>Bienvenue Admin</b>';
    } else {
        echo '<b>Identifiants incorrects</b>';
    }
}
