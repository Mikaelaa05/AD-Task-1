<?php
$protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$host = $_SERVER['HTTPS_HOST'];
$folder = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
define('BASE_URL', $protocol . $host . $folder . '/');
$theme = 'Bocchi the Rock!';
?>