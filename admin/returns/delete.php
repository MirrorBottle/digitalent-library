<?php
session_start();
include('../../functions.php');
$id = $_GET['id'];
mysqli_query($connection, "UPDATE lends SET return_date = NULL WHERE id = $id");
$books = lend_books($id);
foreach($books as $book) {
  update("books", ["id" => $book['id'], 'is_borrowed' => 1]);
}
$result = mysqli_affected_rows($connection) > 0;

flash($result ? "Berhasil menghapus pengembalian. Data peminjaman kembali!" : "Gagal menghapus pengembalian.", $result ? "success" : "error");

header("location:index.php");