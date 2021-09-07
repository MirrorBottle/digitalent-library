<?php
session_start();
include('../../functions.php');


$result = store("members");

flash($result ? "Berhasil menambah anggota" : "Gagal menambah anggota", $result ? "success" : "error");

header("location:index.php");