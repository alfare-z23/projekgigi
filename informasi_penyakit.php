<?php
session_start();
require_once "koneksi.php";
include "library.php";
head('Informasi Penyakit', 1);
style(1); ?>
<style type="text/css">
    body {
        background-color: #f9f9f9;
        margin: 0;
        text-align: center; /* Memusatkan teks untuk judul */
    }
    .panel {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        display: inline-block; /* Membuat panel menjadi inline-block */
    }
    .panel-heading {
        background-color: #007bff;
        color: #fff;
        padding: 15px;
        border-top-left-radius: 10px;
        border-top-right-radius: 5px;
    }
    .panel-title {
        font-size: 24px;
        margin: 0;
    }
    .panel-body {
        padding: 15px;
    }
    .card-container {
        display: flex;
        justify-content: center; /* Memusatkan card di tengah */
        margin: 20px auto;
        padding: 0 20px;
        max-width: 1200px;
    }
    .info-card {
        background-color: #e9ecef;
        border-radius: 5px;
        padding: 36px;
        margin: 26px;
        flex: 1;
        max-width: 300px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: left; /* Mengatur teks ke kiri */
    }
    .info-card h4 {
        margin-top: 0;
        color: #343a40;
    }
    .btn-explore {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }
    .btn-explore:hover {
        background-color: #0056b3;
    }
    
</style>
<body>
<?php
menu();
?>
<h1 class="style1">Informasi Penyakit</h1><br>
<p>Pulpitis terjadi ketika jaringan terdalam dalam gigi Anda meradang. Bakteri yang masuk ke dalam gigi Anda melalui rongga atau retakan menyebabkan <br>
infeksi. Pulpitis dini dapat disembuhkan. Tanpa perawatan, peradangan akan bertambah parah dan Anda memerlukan saluran akar atau pencabutan gigi. <br>
Kebersihan gigi yang baik dan kunjungan rutin ke dokter gigi dapat mencegah pulpitis.</p>
<?php
$kueri = mysqli_query($koneksi, "select id_penyakit,nm_penyakit from penyakit");
?>

<div class="card-container">
    <div class="info-card">
        <h4 class="bold-text">Pulpitis Akut (Reversibel)</h4><br>
        <p>Pulpitis akut adalah kondisi peradangan pada pulpa gigi yang bersifat sementara dan dapat sembuh sendiri. Gejalanya meliputi nyeri gigi ringan yang muncul saat terpapar rangsangan panas atau dingin, tetapi hilang setelah rangsangan dihilangkan.</p>
        <a href="penyakit.php?id_penyakit=P01" class="btn-explore">Baca Lebih Lanjut</a>
    </div>

    <div class="info-card">
        <h4 class="bold-text">Pulpitis Kronis (Irreversibel)</h4><br>
        <p>Pulpitis kronis adalah kondisi peradangan yang berlangsung lama dan tidak dapat sembuh sendiri. Gejala umumnya meliputi nyeri gigi yang parah dan berkepanjangan, serta mungkin disertai dengan pembengkakan atau abses. Perawatan yang diperlukan biasanya melibatkan perawatan saluran akar.</p>
        <a href="penyakit.php?id_penyakit=P02" class="btn-explore">Baca Lebih Lanjut</a>
    </div>
</div>

<footer>
    <div class="container">
      <p>&copy; 2024 Sistem Pakar Diagnosa Penyakit Pulpitis Pada Gigi Manusia</p>
    </div>
</footer>
