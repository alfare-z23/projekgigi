<?php
session_start();
error_reporting(0);
require_once "koneksi.php";
include "library.php";

$id = $_SESSION['id_user'];
cek_akses(3);
head('Konsultasi', 1);
style(1);
?>
<body>
<?php
menu();

// Ambil data user
$quser = mysqli_query($koneksi, "SELECT * FROM tbuser WHERE id_user='$id'");
$user = mysqli_fetch_array($quser);
?>

<div class="container mt-5">
    <h4 class="text-center"><span>Hasil Konsultasi</span></h4>
    <h4><b>Data Diri :</b></h4>
    <table class='table table-condensed table-bordered'>
        <tr><th>Tgl. Konsultasi</th><td><?php echo date('d-m-Y'); ?></td></tr>
        <tr><th>Id User</th><td><?php echo $user['id_user']; ?></td></tr>
        <tr><th>Nama Lengkap</th><td><?php echo $user['nm_pengguna']; ?></td></tr>
        <tr><th>Nohp</th><td><?php echo $user['nohp']; ?></td></tr>
        <tr><th>Email</th><td><?php echo $user['email']; ?></td></tr>
    </table>

    <h4><b>Gejala Dipilih :</b></h4>
    <table class='table'>
        <tr><th>Id Gejala</th><th>Gejala</th></tr>
        <?php
        $s = $_GET['gjl'];
        $pecahgp = explode(",", $s);
        foreach ($pecahgp as $value2) {
            $qb = mysqli_query($koneksi, "SELECT * FROM tbgejala WHERE id_gejala='$value2'");
            $b = mysqli_fetch_array($qb);
            echo "<tr><td>$value2</td><td>$b[nm_gejala]</td></tr>";
        }
        ?>
    </table>

    <?php
    // Diagnosa penyakit
    $p = mysqli_query($koneksi, "SELECT * FROM penyakit ORDER BY id_penyakit");
    $hp = [];
    while ($rp = mysqli_fetch_array($p)) {
        $atas = 0;
        $bawah = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM rule WHERE id_penyakit='$rp[id_penyakit]'"));
        $pecahgp = explode(",", $s);

        foreach ($pecahgp as $value) {
            $qrule = mysqli_query($koneksi, "SELECT * FROM rule WHERE id_penyakit='$rp[id_penyakit]'");
            while ($rule = mysqli_fetch_array($qrule)) {
                if ($value == $rule['id_gejala']) {
                    $atas++;
                }
            }
        }

        $hp[$rp['id_penyakit']] = $atas / $bawah;
    }

    // Mencari penyakit dengan nilai tertinggi
    $max = max($hp);
    $p2 = mysqli_query($koneksi, "SELECT * FROM penyakit ORDER BY id_penyakit");
    $terdeteksi = "tidak"; // Default nilai terdeteksi

    while ($h2 = mysqli_fetch_array($p2)) {
        $idk = $h2['id_penyakit'];
        if ($max == $hp[$idk] && $max == 1) {
            echo "<div class='alert alert-success mt-4'>Gigi Anda terdiagnosa penyakit: <b>$h2[nm_penyakit]</b></br>";
            echo "Keterangan: $h2[keterangan]</div>";
            mysqli_query($koneksi, "INSERT INTO tbhasil_konsultasi VALUES('', '$_SESSION[id_user]', '$_SESSION[username]', '$h2[id_penyakit]', NOW(), '$s')");
            $terdeteksi = "ya";
        }
    }

    if ($terdeteksi != "ya") {
        echo "<div class='alert alert-warning mt-4'>Penyakit tidak terdeteksi!!</div>";
    }

    // Cetak hasil konsultasi
    $c = mysqli_query($koneksi, "SELECT * FROM tbhasil_konsultasi WHERE username='$_SESSION[username]' ORDER BY tgl_hasil DESC");
    $cetak = mysqli_fetch_array($c);
    echo "<p><a class='btn btn-info' href='cetak.php?id=$cetak[id_hasil]&id_u=$id&gjl=$_GET[gjl]' target='_blank'>Cetak Hasil Konsultasi</a></p>";
    ?>
</div>

<?php include "template/footer.php"; ?>
</body>
</html>
