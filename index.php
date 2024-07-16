<?php
session_start();
require_once "koneksi.php";
include "library.php";
head('Sistem Pakar Diagnosa Penyakit Pulpitis Pada Gigi Manusia', 1);
style(1); ?>
<body>
<?php
menu();
?>

<!-- Jumbotron -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4 bold-text text-shadow">Sistem Pakar Diagnosa Penyakit <br>Pulpitis Pada Gigi Manusia</h1>
        <p class="lead">Menggunakan Metode Forward Chaining</p><br>
    </div>
</div>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="feature-box">
                <h4>Konsultasi</h4>
                <p>1. Registrasi terlebih dahulu</p>
                <p>2. Login dengan username dan password</p>
                <p>3. Berhasil login, lakukan konsultasi</p>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="feature-box">
                <h4>Informasi Pulpitis</h4>
                <p>
                Pulpitis adalah suatu kondisi peradangan pada pulpa gigi yang terdiri dari 
                jaringan <br>vaskular, jaringan ikat, pembuluh darah, dan saraf. Ketika bagian ini
                mengalami <br>peradangan, Anda akan mengalami rasa sakit dari saraf-saraf yang terlibat.
                </p>
                <p>
                <b>Salam Kesehatan Gigi!</b>
                <br/>
                Pencegahan yang harus anda kenali, hindari makanan yang terlalu panas atau dingin, tingkatkan kebersihan mulut dengan menyikat gigi setelah makan dan sebelum tidur, jangan menggosok gigi terlalu keras sebab bisa berdampak buruk, menjaga pola makan sehat dengan kadar karbohidrat yang cukup.
                <br/><br/>
                <b>Seberapa umum kondisi pulpitis terjadi?</b>
                <br/>
                Kondisi ini cukup umum terjadi. Sering kali terjadi pada pasien yang kurang menjaga kebersihan gigi dan mulut serta pasien dengan sayatan medis pada rongga mulut. Selain menyebabkan rasa sakit dan tidak nyaman, radang pulpa gigi ini dapat menyebar dan menyebabkan komplikasi yang berpotensi mengancam nyawa, seperti infeksi pada ruang fasia dalam di kepala dan leher. Pulpitis dapat ditangani dengan mengurangi faktor-faktor risiko. Diskusikan dengan dokter untuk informasi lebih lanjut.
                <br/><br/>
                <b>Apa yang menyebabkan pulpitis itu terjadi?</b>
                <br/>
                Pulpitis tidak hanya disebabkan oleh bakteri, tapi juga akibat trauma atau cedera pada gigi atau rahang yang membuka rongga pulpa dan mengakibatkan bakteri masuk. Beberapa penyebab pulpitis adalah sebagai berikut: 
                <p>Infeksi bakteri, Cedera saat operasi gigi dan mulut, Trauma, misalnya akar atau crown (gigi tiruan) yang retak serta abrasi gigi. Bisa juga disebabkan oleh bruxism, yaitu kebiasaan menggemeretakkan atau menggesekkan gigi saat tidur. Kecacatan bentuk gigi.</p>
                </p>
                <p>Dalam pengumpulan data kami mengambil data dari dokter spesalis gigi yaitu Drg.Fahreni.</p>
            </div>
        </div>
    </div>
</div>
<!-- Information Photo Cards -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-1">
                <div class="card-body text-center">
                    <img src="gambar/gigi.png" alt="Logo" class="logo" />
                    <h5 class="card-title">Pertanyaan 1</h5>
                    <p class="card-text">Apa yang terjadi jika pulpitis tidak diobati?</p>
                    <a href="https://www.alodokter.com/pulpitis" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-2">
                <div class="card-body text-center">
                    <img src="gambar/gigi.png" alt="Logo" class="logo" />
                    <h5 class="card-title">Pertanyaan 2</h5>
                    <p class="card-text">Kapan harus mencari perawatan medis untuk pulpitis?</p>
                    <a href="https://www.alodokter.com/pulpitis" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-3">
                <div class="card-body text-center">
                    <img src="gambar/gigi.png" alt="Logo" class="logo" />
                    <h5 class="card-title">Pertanyaan 3</h5>
                    <p class="card-text">Bagaimana cara mendiagnosis pulpitis?</p>
                    <a href="https://www.alodokter.com/pulpitis" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container">
      <p>&copy; 2024 Sistem Pakar Diagnosa Penyakit Pulpitis Pada Gigi Manusia</p>
    </div>
</footer>
