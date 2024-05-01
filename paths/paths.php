<?php
define('VIEWS', getPath('views'));
define('ENGINE', getPath('engine'));
define('COMPONENTS', getPath('views/components'));
define('DATABASE', getPath('database'));
define('CONFIG', getPath('config'));

function getPath($directory) : string
{
  return realpath(__DIR__ . "/../" . $directory);
}
