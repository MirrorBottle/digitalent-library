<?php 
    include(dirname(__DIR__) . "./functions.php");
    session_start();
    if($_SESSION['status']!="login"){
      header("location:../index.php");
    }
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.1/datatables.min.css"/>
    <link rel="stylesheet" href="/digitalent-library/assets/css/main.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <?php include(dirname(__DIR__) . "./layouts/navbar.php") ?>
