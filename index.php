<?php

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=josevale_pht_practice', 'josevale_aith', 'myP7ssw0rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}

try
{
  $sql = 'SELECT * FROM content WHERE id=1';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching content: ' . $e->getMessage();
  include 'includes/error.html.php';
  exit();
}

while ($row = $result->fetch())
{
 $contents[] = array(
  'title' => $row['title'],
  'description' => $row['description'],
  'comments' => $row['comments']
);
}

$link = "site_assets/";

include 'home/home.html.php';
