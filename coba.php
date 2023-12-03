<?php   
include_once("config.php");
if (isset($_POST['Submit'])) {
    $nama = $_POST['name'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $jumlah_anak = $_POST['jumlah'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <a href="index.html">Tambah Data Pegawai</a>
    <div class="container">
        <h2>Data User</h2>
        <p>Nama Pegawai : <?php echo $nama; ?></p>
        <p>Agama: <?php echo $agama; ?></p>
        <p>Jabatan: <?php echo $jabatan; ?></p>
        <p>Status: <?php echo $status; ?></p>
        <p>Jumlah Anak: <?php echo $jumlah_anak; ?></p>
    </div>
</body>
</html>