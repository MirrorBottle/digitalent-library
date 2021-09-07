<?php
session_start();
include('../../functions.php');

$result = delete("lends", $_GET['id']);
flash($result ? "Berhasil menghapus peminjaman" : "Gagal menghapus peminjaman", $result ? "success" : "error");

header("location:index.php");