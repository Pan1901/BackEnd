<?php
// Mengambil keyword pencarian dari parameter URL
$keyword = $_GET['keyword'];

// Koneksi ke database (sesuaikan dengan konfigurasi database Anda)
$servername = "36.79.231.51/phpmyadmin";
$username = "root";
$password = "";
$dbname = "dataku";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Koneksi database gagal: " . $conn->connect_error);
}

// Membuat query pencarian dengan menggunakan LIKE pada kolom nama dan nim
$sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%'";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

$conn->close();

// Mengembalikan data dalam format JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
