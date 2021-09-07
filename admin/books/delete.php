<?php
session_start();
include('../../functions.php');

$result = delete("books", $_GET['id']);

flash($result ? "Berhasil menghapus buku" : "Gagal menghapus buku", $result ? "success" : "error");

header("location:index.php");