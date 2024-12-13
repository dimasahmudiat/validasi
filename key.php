<?php
// Simpan di hosting PHP Anda (contoh: InfinityFree).
header('Content-Type: application/json');

// Key valid
$valid_key = "1120";

// Ambil data dari request
$key = isset($_POST['key']) ? $_POST['key'] : '';

// Validasi
if ($key === $valid_key) {
    echo json_encode(['status' => 'success', 'message' => 'Login sukses']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Key tidak valid']);
}
?>
