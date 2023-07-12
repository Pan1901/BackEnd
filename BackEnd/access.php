<?php
// Set header CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

// Proses permintaan data atau operasi lainnya

// Contoh mengirim respon
$response = array(
    'status' => 'success',
    'message' => 'Data berhasil diambil'
);

// Mengubah respon menjadi format JSON
echo json_encode($response);
?>
