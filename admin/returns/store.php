<?php
session_start();
include('../../functions.php');



$result = update("lends");
$books = lend_books($_POST['id']);
foreach($books as $book) {
  
  update("books", ["id" => $book['id'], 'is_borrowed' => '0']);
}
flash("Berhasil menambah pengembalian", "success");

header("location:index.php");