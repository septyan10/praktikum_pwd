<head>
    <link rel="stylesheet" type="text/css" href="dasar.css">
<head>
<?php
include("connect.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['no_id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $kodepos = $_POST['kode_pos'];

    $sql = "UPDATE Mahasiswa SET nama='$nama', alamat='$alamat', no_telp='$no_telp', kode_pos='$kodepos' WHERE no_id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {

        header('Location: index.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
