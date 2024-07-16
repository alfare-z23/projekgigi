<?php
session_start();
require_once "koneksi.php";
if(isset($_SESSION['username'])) header('Location:/pakar');
include "library.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['Tusername'];
    $password = $_POST['Tpassword'];

    if($_POST['level'] == 1){
        $kueri = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password';");
    } else {
        $kueri = mysqli_query($koneksi, "SELECT * FROM tbuser WHERE username='$username' AND password='$password';");
    }

    if(mysqli_num_rows($kueri) > 0) {
        while ($isi = mysqli_fetch_array($kueri, MYSQLI_BOTH)){
            $_SESSION['username'] = $isi['username'];
            $_SESSION['id_user'] = $isi['id_user'];
            $_SESSION['id_tipe'] = ($_POST['level'] == 1) ? 1 : 3;
        }
        $pesan = pesan('success', "Anda berhasil login.", 0);
        header('Location:index.php');
    } else {
        $pesan = pesan('danger', "Username dan Password tidak cocok.", 0);
    }
} else {
    $pesan = "";
}

head('Login', 1);
style(1);
?>
<style type="text/css">
    .login-container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
    }
    .btn-success{
        margin-left:15vh;
    }
    .text-center{
        color:#fff;
    }
    .form-group{
        color:#fff;
    }
    
</style>

	
</style>
<body>
<?php menu(); ?>
<div class="login-container">
    <h1 class="style1 text-center">Login</h1>
    <?php echo $pesan; ?>
    <form method="POST">
        <div class='form-group'>
            <label for="Tusername" class="label-control style1"><strong>Username :</strong></label>
            <input id="Tusername" class="form-control" type="text" name="Tusername" maxlength=20 minlength=3 required placeholder="Username"/>
        </div>
        <div class='form-group'>
            <label for="level" class="label-control style1">Level :</label>
            <select name='level' class='form-control' required>
                <option value=''>Pilih Level</option>
                <option value='1'>Admin</option>
                <option value='3'>Member</option>
            </select>
        </div>
        <div class='form-group'>
            <label for="Tpassword" class="label-control style1">Password :</label>
            <input id="Tpassword" class="form-control" type="password" name="Tpassword" maxlength=20 required placeholder="Password"/>
        </div>
        <button type="submit" name="Bsimpan" class="btn btn-success">Login</button>
        <button type="reset" class="btn btn-danger">Ulangi</button>
    </form>
</div>
</body>
