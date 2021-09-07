<?php
session_start();
include('../../functions.php');

$result = delete("members", $_GET['id']);

flash($result ? "Berhasil menghapus anggota" : "Gagal menghapus anggota", $result ? "success" : "error");

header("location:index.php");