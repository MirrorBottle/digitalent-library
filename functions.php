<?php
include('config.php');

function all($table) {
  global $connection;
  $result = mysqli_query($connection, "SELECT * FROM $table ORDER BY id DESC");
	$rows = [];
	while($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function findById($table, $id) {
	global $connection;
	$result = mysqli_query($connection, "SELECT * FROM $table WHERE id = $id");
  $rows = [];
	while($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows[0];
}

function store($table) {
	global $connection;
	$fields = [];
	$values = [];
	foreach ($_POST as $key => $value) {
		$fields[] = $key;
		$values[] = "'$value'";
	}
	$fields = join(", ", $fields);
	$values = join(", ", $values);
	$query = "INSERT INTO $table ($fields) VALUES ($values)";
	mysqli_query($connection, $query);
	return mysqli_affected_rows($connection) > 0;
	
}

function update($table) {
	global $connection;
	$id = $_POST['id'];
	$values = [];
	foreach ($_POST as $key => $value) {
		$values[] = "$key = '$value'";
	}
	$values = join(", ", $values);
	$query = "UPDATE $table SET $values WHERE id = $id";
	mysqli_query($connection, $query);
	return mysqli_affected_rows($connection) > 0;
}

function upload($field, $path = '../../img/') {

	$namaFile = $_FILES[$field]['name'];
	$ukuranFile = $_FILES[$field]['size'];
	$error = $_FILES[$field]['error'];
	$tmpName = $_FILES[$field]['tmp_name'];
	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, $path . $namaFileBaru);

	return $namaFileBaru;
}

function flash($message, $type) {
	$_SESSION['flash'][$type] = $message;

}