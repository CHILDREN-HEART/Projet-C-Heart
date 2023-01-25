<?php

require_once("../utils/database.php");

session_start();

echo "<link href='./style.css' rel='stylesheet' type='text/css'>";

if (isset($_SESSION['statut']) && $_SESSION['statut'] == "prof") {
    require("./chatboxProf.php");
} else {
    require("./chatboxStudent.php");
}
