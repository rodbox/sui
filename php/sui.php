<?php
session_start();

    $_SESSION['sui'][$_GET['key']] = $_GET['value'];

?>