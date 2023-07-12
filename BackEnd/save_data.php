<?php
$data = json_decode(file_get_contents('php://input'), true);

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
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "INSERT INTO mahasiswa (nama, nim, jurusan, tahun) VALUES ('$nama', '$nim', '$jurusan', '$tahun')";

if ($conn->query($sql) === TRUE) {
    echo "Data mahasiswa berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
