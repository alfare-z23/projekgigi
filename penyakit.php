<?php
session_start();
require_once "koneksi.php";
include "library.php";
head('Informasi Penyakit', 1);
style(1); ?>
<style>
    html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }
    .container {
        flex: 1; /* Memungkinkan kontainer untuk mengisi ruang yang tersisa */
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #007bff;
    }
    .form-group {
        margin-bottom: 20px;
        padding: 28px; /* Padding untuk ruang di dalam grup */
    }
    .label-control {
        font-weight: bold;
        color: #343a40;
    }
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
    }
</style>
<body>
<?php
menu();
?>
<div class="container">
    <h1>Data Penyakit</h1>
    <?php
    $id = $_GET['id_penyakit'];
    $kueri = mysqli_query($koneksi, "SELECT * FROM penyakit WHERE id_penyakit='$id'");
    
    while ($isi = mysqli_fetch_array($kueri, MYSQLI_BOTH)) { ?>
        <div class='form-group' align='justify'>
            <label for="Tketerangan" class="label-control">Keterangan Penyakit:</label>
            <?php echo $isi['keterangan']; ?>
        </div>
    <?php } ?>
</div>

<footer>
    <p>&copy; 2024 Sistem Pakar Diagnosa Penyakit Pulpitis Pada Gigi Manusia</p>
</footer>
</body>
</html>
