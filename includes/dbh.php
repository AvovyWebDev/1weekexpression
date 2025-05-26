<?php

$dsn = "mysql:host=localhost;dbname=1weekexpression";
$dbuname = "root";
$dbpasswd = "";

try {
  $pdo = new PDO($dsn, $dbuname, $dbpasswd);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("SET NAMES utf8mb4");
} catch (PDOException $err) {
  echo "Connection failed: " . $err->getMessage();
}
