<?php
include_once DATABASE . "/database.php";

function getMenu(): array
{
  $menu = [];
  $response = queryAll('menu');
  while ($row = mysqli_fetch_assoc($response)) {
    $menu[] = $row;
  }
  return $menu;
}
