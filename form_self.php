<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <?php
        //inisialisasi variabel
        $namaErr = "";
        $nama = "";

        //cek apakah form sudah disubmit 
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            //validasi nama (contoh: pastikan nama tidak kosong)
            if(empty($_POST["nama"])) {
                $namaErr = "Nama harus diisi";
            } else {
                $nama = $_POST["nama"];
                echo "Data berhasil disimpan!";
            }
        }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" value="<?php echo $nama;?>"><br><br>
        <span class="error"><?php echo $namaErr; ?></span>

        <input type="submit" name="nama" value="Submit">
    </form>
</body>
</html>
