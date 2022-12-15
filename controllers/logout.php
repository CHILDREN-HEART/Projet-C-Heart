<?php

if ( empty(session_id()) ) session_start();
session_destroy();

header('Location: ../index.php');
