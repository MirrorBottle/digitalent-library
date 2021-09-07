<?php
session_start();
include('../../functions.php');

$result = update("members");

flash($result ? "Berhasil mengubah anggota" : "Gagal mengubah anggota", $result ? "success" : "error");

header("location:index.php");