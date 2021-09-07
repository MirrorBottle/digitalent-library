<?php
session_start();
include('../../functions.php');

$data = [
  'id' => $_POST['id'],
  'return_date' => $_POST['return_date']
];
$result = update("lends", $data);

flash($result ? "Berhasil mengubah pengembalian" : "Gagal mengubah pengembalian", $result ? "success" : "error");

header("location:index.php");