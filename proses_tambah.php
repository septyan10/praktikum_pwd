<head>
    <link rel="stylesheet" type="text/css" href="dasar.css">
<head>
<?php
include("connect.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $kodepos = $_POST['kodepos'];

    mysqli_query($db, "INSERT INTO mahasiswa VALUES
    ('', '$nama', '$alamat', '$no_telp', '$kodepos')");

    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
}
