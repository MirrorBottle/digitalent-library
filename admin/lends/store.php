<?php
session_start();
include('../../functions.php');

$lend_data = [
  'number' => $_POST['number'],
  'member_id' => $_POST['member_id'],
  'lend_date' => $_POST['lend_date'],
];
$lend_id = store("lends", $lend_data, true);
foreach($_POST['books'] as $book_id) {
  $detail_data = [
    'lend_id' => $lend_id,
    'book_id' => $book_id
  ];
  $book = update("books", ['id' => $book_id, 'is_borrowed' => 1]);
  $detail = store("lend_details", $detail_data);
}

flash($lend_id ? "Berhasil menambah anggota" : "Gagal menambah anggota", $lend_id ? "success" : "error");

header("location:index.php");