<?php
session_start();

include('config/db.php');
include('routes.php');

$page = $_GET['page'] ?? 'beranda';

if (array_key_exists($page, $routes)) {
    include $routes[$page];
} else {
    include 'controllers/404.php';
}
?>
