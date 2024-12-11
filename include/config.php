<?php

session_start();

if (!isset($_SESSION['lang']))
    $_SESSION['lang'] = "sr";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "en")
        $_SESSION['lang'] = "en";
    else
        $_SESSION['lang'] = "sr";
}

    require_once "languages/" . $_SESSION['lang'] . ".php";
?>