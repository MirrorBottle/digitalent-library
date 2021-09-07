<?php
session_start();
include('../../functions.php');

if( $_FILES['cover']['error'] === 4 ) {
  $cover = $_POST['old_image'];
} else {
  $cover = upload("cover");
}
$_POST['cover'] = $cover;
unset($_POST['old_cover']);
$result = update("books");

flash($result ? "Berhasil mengubah buku" : "Gagal mengubah buku", $result ? "success" : "error");

header("location:index.php");