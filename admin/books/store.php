<?php
session_start();
include('../../functions.php');


$cover = upload("cover");
$_POST['cover'] = $cover;
$result = store("books");

flash($result ? "Berhasil menambah buku" : "Gagal menambah buku", $result ? "success" : "error");

header("location:index.php");