<?php
$base = "";
require 'config/config.php';
session_start();
Page::ForceLogin();
require_once 'views/header.php';
$page = selectView($_SESSION['privileges']);
require_once 'views/' . $page . '.php';
require_once 'views/footer.php';
?>
