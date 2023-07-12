<?php

$servername = "36.79.231.51/phpmyadmin";
$username = "root";
$password = "";
$dbname = "dataku";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Koneksi database gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

$mahasiswa = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $mahasiswa[] = $row;
  }
}

echo json_encode($mahasiswa);

$conn->close();
?>
