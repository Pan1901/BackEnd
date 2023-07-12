<?php
$data = json_decode(file_get_contents('php://input'), true);

$id = $data['id'];
$nama = $data['nama'];
$nim = $data['nim'];
$jurusan = $data['jurusan'];
$tahun = $data['tahun'];

$servername = "36.79.231.51/phpmyadmin";
$username = "root";
$password = "";
$dbname = "dataku";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Koneksi database gagal: " . $conn->connect_error);
}

$sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan', tahun='$tahun' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Data mahasiswa berhasil diperbarui";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
