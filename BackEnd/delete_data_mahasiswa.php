<?php
$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataku";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Koneksi database gagal: " . $conn->connect_error);
}

$sql = "DELETE FROM mahasiswa WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Data mahasiswa berhasil dihapus";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
