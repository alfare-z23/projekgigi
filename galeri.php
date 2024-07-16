<?php
session_start();
require_once "koneksi.php";
include "library.php";
head('Konsultasi',1);
style(1); ?>
<style type="text/css">

.style1 {font-family: Georgia, "Times New Roman", Times, serif}

</style>
<body>
<?php
menu();
?>
<div class="container mt-4">
    <h1 class="text-center">Galeri Kesehatan Gigi</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card gallery-card">
                <img src="gambar/veneer-gigi.jpg" class="card-img-top" alt="Dokumentasi 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Veneer Gigi</h5>
                    <p class="card-text">Bahan cangkang tipis yang ditempelkan pada permukaan depan gigi, untuk memperbaiki penampilannya.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card gallery-card">
                <img src="gambar/behel-gigi.jpg" class="card-img-top" alt="Dokumentasi 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Behel Gigi</h5>
                    <p class="card-text">Metode yang digunakan untuk mendapatkan susunan gigi yang ideal.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card gallery-card">
                <img src="gambar/gigi-palsu.jpg" class="card-img-top" alt="Dokumentasi 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Gigi Palsu</h5>
                    <p class="card-text">Alat bantu untuk menggantikan gigi yang hilang dan jaringan gusi di sekelilingnya.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card gallery-card">
                <img src="gambar/tooth-whitening.jpeg" class="card-img-top" alt="Dokumentasi 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Pemutihan Gigi</h5>
                    <p class="card-text">Tindakan estetik untuk memutihkan gigi dengan menggunakan zat pemutih untuk mencerahkan dan memutihkan gigi.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card gallery-card">
                <img src="gambar/tambal-gigi.jpeg" class="card-img-top" alt="Dokumentasi 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Tambal Gigi</h5>
                    <p class="card-text">Prosedur untuk memperbaiki gigi yang berlubang atau rusak, dengan cara memasukkan bahan tambalan ke gigi yang bermasalah.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card gallery-card">
                <img src="gambar/gum-lift.jpg" class="card-img-top" alt="Dokumentasi 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Gum Lifting</h5>
                    <p class="card-text">Prosedur perawatan gigi kosmetik yang mengangkat dan membentuk garis gusi</p>
                </div>
            </div>
        </div>
        <!-- Add more cards as needed -->
    </div>
</div>
<script src="bootstrap/js/bootstrap.js"></script>

<footer>
    <div class="container">
      <p>&copy; 2024 Sistem Pakar Diagnosa Penyakit Pulpitis Pada Gigi Manusia</p>
    </div>
</footer>