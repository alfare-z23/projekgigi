<?php
session_start();

// Hapus semua variabel sesi
$_SESSION = array();

// Hapus sesi
session_destroy();

// Redirect ke halaman index
header("Location: index.php"); // Ganti 'index.php' dengan nama file yang sesuai jika berbeda
exit();
?>
