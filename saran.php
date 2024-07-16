<?php
session_start();
require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nm = $_POST['Tnm_pengguna'];
    $saran = $_POST['Tsaran'];
    $kueri = mysqli_query($koneksi, "INSERT INTO tbsaran (nama, saran) VALUES ('$nm', '$saran');");
    if ($kueri) header('Location: saran.php');
}

include "library.php";
head('Kritik & Saran', 1);
style(1);
?>
<style type="text/css">
    body {
        background-color: #f4f7fa;
        margin: 0;
    }
    h1 {
        text-align: center;
        color: #333;
    }
    .form-container {
        max-width: 600px;
        margin: 20px auto; /* Margin atas dan bawah, tengah secara horizontal */
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .label-control {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s;
    }
    .form-control:focus {
        border-color: #007bff;
        outline: none;
    }
    .btn {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .btn-success {
        background-color: #28a745;
        color: white;
        margin-bottom:7px;
    }
    .btn-danger {
        background-color: #dc3545;
        color: white;
    }
    .btn:hover {
        opacity: 0.9;
    }
    

    .feedback-container {
        max-width: 600px; /* Batasi lebar agar sama dengan form */
        margin: 30px auto; /* Tengah secara horizontal */
    }

    .feedback-item {
        background-color: #f8f9fa;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>
<body>
<?php
menu();
?>

<div class="form-container">
    <h1>Kritik & Saran</h1>
    <form method="POST">
        <div class='form-group'>
            <label for="Tnm_pengguna" class="label-control">Nama Anda :</label>
            <input id="Tnm_pengguna" class="form-control" type="text" name="Tnm_pengguna" maxlength=30 required placeholder="Nama Anda"/>
        </div>
        <div class='form-group'>
            <label for="Tsaran" class="label-control">Saran & Kritik :</label>
            <textarea id="Tsaran" class="form-control" name="Tsaran" minlength=10 rows=5 required placeholder="Saran & Kritik"></textarea>
        </div>
        <button type="submit" name="Bsimpan" class="btn btn-success">Kirim</button>
        <button type="reset" class="btn btn-danger">Ulangi</button>
    </form>
</div>

<div class="feedback-container">
    <fieldset>
        <legend><h2>Kritik & Saran yang Masuk</h2></legend>
        <?php
        $kueri = mysqli_query($koneksi, "SELECT * FROM tbsaran");
        if (mysqli_num_rows($kueri) < 1) {
            echo "<strong><center>Kritik dan Saran masih kosong...</center></strong><br/><br/>";
        } else {
            while ($isi = mysqli_fetch_array($kueri, MYSQLI_BOTH)) {
                $hari = substr($isi['tgl_kirim'], 8, 2);
                $bulan = substr($isi['tgl_kirim'], 5, 2);
                $tahun = substr($isi['tgl_kirim'], 0, 4);
                ?>
                <div class="feedback-item">
                    <h4><?php echo $isi['nama']; ?> <small><?php echo tanggal_indo($hari, $bulan, $tahun); ?></small></h4>
                    <p><?php echo $isi['saran']; ?></p>
                </div>
                <?php
            }
        }
        ?>
    </fieldset>
</div>

<?php
include "template/footer.php";
?>
