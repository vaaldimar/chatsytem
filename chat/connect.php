<?php 
try
{
  $connect = new PDO('mysql:host=localhost;dbname=valdimar', 'valdimar', 'valdimar');
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $connect->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = '<h1>Oh no. Something went wrong!.</h1>';
  echo $e;
  echo $error;
  exit();
}