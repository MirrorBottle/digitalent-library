<?php
session_start();
include('../../functions.php');


$lend_data = [
  'id' => $_POST['id'],
  'number' => $_POST['number'],
  'member_id' => $_POST['member_id'],
  'lend_date' => $_POST['lend_date'],
];


$lend = update("lends", $lend_data);
$book_ids = [];
$books = lend_books($_POST['id']);
foreach($books as $book) {
  $book_ids[] = $book['lend_detail_id'];
}

delete_multiple("lend_details", $book_ids);

foreach($book_ids as $book_id) {
  $book = update("books", ['id' => $book_id, 'is_borrowed' => 0]);
}

foreach($_POST['books'] as $book_id) {
  $detail_data = [
    'lend_id' => $_POST['id'],
    'book_id' => $book_id
  ];
  $book = update("books", ['id' => $book_id, 'is_borrowed' => 1]);
  $detail = store("lend_details", $detail_data);
}

flash("Berhasil mengubah peminjaman", "success");

header("location:index.php");