<?php

include "connect.php";

$id = $_GET['id'];
$data = mysqli_query($db, "SELECT * FROM Mahasiswa WHERE no_id='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Belajar PHP | Edit Data</title>
        <link rel="stylesheet" type="text/css" href="dasar.css">
    </head>

    <body>
        <header>
            <h3>Edit Identitas</h3>
        </header>

        <form action="proses-edit.php" method="POST">

            <fieldset>
                <input type="hidden" name="no_id" value="<?php echo $d['no_id']; ?>" />
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $d['nama']; ?>" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat"><?php echo $d['alamat'] ?></textarea>
                </p>
                <p>
                    <label for="no_telp">Nomor HP: </label>
                    <textarea name="no_telp"><?php echo $d['no_telp'] ?></textarea>
                </p>
                <p>
                    <label for="kode_pos">Kodepos: </label>
                    <input type="text" name="kode_pos" placeholder="kode_pos" value="<?php echo $d['kode_pos'] ?>" />
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>

            </fieldset>


        </form>

    </body>
<?php } ?>

    </html>