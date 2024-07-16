<?php
session_start();
error_reporting(0);
require_once "koneksi.php";
include "library.php";
cek_akses(3);
head('Konsultasi', 1);
style(1); 
?>
<style type="text/css">
    body { 
        background-color: #f8f9fa; 
    }
    .consultation-container { 
        max-width: 800px; 
        margin: 20px auto; 
        padding: 20px; 
		margin-top:20vh;
        background-color: white; 
        border-radius: 10px; 
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
        font-family: 'Arial', sans-serif; 
    }
    .style2 { 
        font-size: 36px; 
        color: #007bff; 
        text-align: center; 
    }
    .question { 
        font-size: 20px; 
        margin: 20px 0; 
        text-align: center; 
        color: #343a40; 
    }
    .actions { 
        text-align: center; 
        margin-top: 30px; 
    }
    .btn-lg { 
        margin: 5px; 
        padding: 10px 20px; 
        font-size: 18px; 
    }
    
</style>
<body>
<?php
menu();

$gejala = mysqli_query($koneksi, "SELECT * FROM tbgejala");
$jml = mysqli_num_rows($gejala);
?>

<div class="consultation-container">
    <h3 class="style2 bold-text">Konsultasi Penyakit Gigi</h3>
    <p class="text-center">
        <span style="font-size: 18px;">Silakan jawab pertanyaan berikut sesuai dengan gejala penyakit <br>gigi yang Anda alami.</span> 
        <span style="font-size: 18px;">Pilih dari <?php echo $jml; ?> gejala yang tersedia</span>
    </p>

    <?php
    $posisi = $_GET['hal'] - 1;
    $g = mysqli_query($koneksi, "SELECT * FROM tbgejala ORDER BY id_gejala ASC LIMIT $posisi, 1");
    $r = mysqli_fetch_array($g);
    ?>
    
    <div class="question">
        <p><strong>Apakah <?php echo $r['nm_gejala']; ?>?</strong></p>
    </div>
    
    <div class="actions">
        <?php
        if ($_GET['gjl'] != "") {
            $gjl = "$_GET[gjl],$r[id_gejala]";
        } else {
            $gjl = "$r[id_gejala]";
        }
        
        if ($jml == $_GET['hal']) {
            echo "<a href='hasilkonsultasi.php?gjl=$gjl' class='btn btn-info btn-lg'>Ya</a>";
            echo "<a href='hasilkonsultasi.php?gjl=$_GET[gjl]' class='btn btn-danger btn-lg'>Tidak</a>";
        } else {
            $hal = $_GET['hal'] + 1;
            echo "<a href='konsultasi.php?hal=$hal&gjl=$gjl' class='btn btn-info btn-lg'>Ya</a>";
            echo "<a href='konsultasi.php?hal=$hal&gjl=$_GET[gjl]' class='btn btn-danger btn-lg'>Tidak</a>";
        }
        ?>
    </div>
</div>

<!-- <footer>
    <p>&copy; 2024 Sistem Pakar Diagnosa Penyakit Pulpitis Pada Gigi Manusia</p>
</footer> -->

