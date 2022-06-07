<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "Selamat Datang " . $_SESSION['username'];
    }

    ?>
<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
    <link rel="stylesheet" type="text/css" href="dasar.css">
</head>

<body>

    <a href="tambah.php">+ TAMBAH IDENTITAS</a>
    <a href="logout.php"> Logout </a>
    <br />
    <br />
    <table border="1" id="customer">
        <tr>
            <th>NO</th>
            <th>Nomor Identitas</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor HP</th>
            <th>Kodepos</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['no_id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_telp']; ?></td>
                <td><?php echo $d['kode_pos']; ?></td>
                <td>
                <div class="aksi-edit">
                        <a href="edit.php?id=<?php echo $d['no_id']; ?>" class="button1" >EDIT </a>
                    </div>
                    <div class="aksi-hapus">
                        <a href="hapus.php?id=<?php echo $d['no_id']; ?>" class="button1">HAPUS</a>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>