<?php
require_once __DIR__ . "/../paths/paths.php";

$uri = $_SERVER['REQUEST_URI'];
if ($uri === '/') {
  include VIEWS . '/pages/main.php';
} else {
  $uri = trim($uri, '/');
  include VIEWS . "/pages/$uri.php";
}
