<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Database\MySQL;

$db = MySQL::getInstance();

$db->createPost($_POST);

setcookie('action', 'Post created successfully!', 0, '/');

if (headers_sent()) {
    die('<script type="text/javascript">window.location="/index.php"</script>');
} else {
    header('Location: /index.php');
    die();
}
