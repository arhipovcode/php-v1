<?php

function getConnection(): false|mysqli
{
  $config = include CONFIG . "/db.php";
  static $connection = null;
  if (is_null($connection)) {
    $connection = mysqli_connect(
      $config['host'],
      $config['login'],
      $config['password'],
      $config['database']
    );
  }
  return $connection;
}

function queryAll(string $table): mysqli_result|bool
{
  return mysqli_query(getConnection(), "SELECT * FROM $table");
}

function queryOne(string $table, string $id): mysqli_result|bool
{
  return mysqli_query(getConnection(), "SELECT * FROM $table WHERE id = $id");
}
