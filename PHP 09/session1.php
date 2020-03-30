<?php
session_name('myapp');
session_start([
    'cookie_lifetime'=>60
]);
//$_SESSION['counter'] = $_SESSION['counter'] ?? 0;
//$_SESSION['counter']++;
//echo $_SESSION['counter'];
$_SESSION['name'] = 'DEar Ma';
echo $_SESSION['name'];
//session_destroy();