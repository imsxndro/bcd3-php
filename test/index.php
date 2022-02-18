<?php

require_once 'data.php';
require_once 'functions.php';

$allowedModules = array('articles', 'news');

if(empty($_GET['m']) || null === $_GET['m']) {
    die('Module is required');
} else {
    $module = $_GET['m'];
}

if(!in_array($module, $allowedModules)) {
    die('Invalid module');
}

echo execute($module);

?>