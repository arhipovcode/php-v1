<?php
include_once DATABASE . "/database.php";

function getCatalogs(): array
{
  $result = [];
  $catalogs = queryAll('catalogs');
  if ($catalogs !== false) {
    if (mysqli_num_rows($catalogs)) {
      while ($row = mysqli_fetch_assoc($catalogs)) {
        $result[] = $row;
      }
    }
  }

  return $result;
}

function getOneProduct(int $id): array
{
  $result = [];
  $good = queryOne('catalogs', $id);
  while ($row = mysqli_fetch_assoc($good)) {
    $result[] = $row;
  }
  return $result;
}
