<?php


if (true || $_SESSION['user_type'] == 'prof') {
    echo require("./chatboxProf.php");
} else {
    echo require("./chatboxStudent.php");
}