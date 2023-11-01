<?php
require "koneksi.php";

$date = date("Y-m-d H-i-sa");

if (isset($_POST["tambah"])) {
    $nama = $_POST["Nama_Item"];
    $Jenis = $_POST["Jenis_Item"];

    // Upload
    $Gambar = $_FILES['Gambar']['name'];
    $explode = explode('.', $Gambar);
    $ekstensi = strtolower(end($explode));
    $Gambar_baru = "$date $nama.$ekstensi";
    $tmp = $_FILES['Gambar']['tmp_name'];

    if (move_uploaded_file($tmp, 'img/' . $Gambar_baru)) {
        $result = mysqli_query($conn, "insert into Item 
        (ID_Item, Nama_Item, Jenis_Item, Gambar) 
        values ('', '$nama', '$Jenis', '$Gambar_baru')");

        if ($result) {
            echo "
                <script>
                alert('Data Berhasil Ditambahkan! dan file berhasil di upload');
                document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo error_log($result) . "
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'tambah.php';
            </script>
        ";
        }
    } else {
        echo "Gagal Mengupload Gambar";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="stylex.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .item {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        a {
            display: block;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="item">
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Tambah Data</h2>
            <label for="Nama_Item">Nama :</label>
            <input type="text" name="Nama_Item" id="Nama_Item">
            <label for="Jenis_Item">Jenis Item:</label>
            <input type="radio" name="Jenis_Item" id="Sword" value="Sword"> Sword
            <input type="radio" name="Jenis_Item" id="Bow" value="Bow"> Bow
            <input type="radio" name="Jenis_Item" id="Gun" value="Gun"> Gun
            <input type="radio" name="Jenis_Item" id="Rod" value="Rod"> Rod
            <input type="radio" name="Jenis_Item" id="FLAILS" value="FLAILS"> FLAILS
            <label for="Gambar">Upload Gambar:</label>
            <input type="file" name="Gambar" id="Gambar">
            <button type="submit" name="tambah">Tambah</button>
        </form>
        <a href="index1.php">Kembali ke home</a>
    </div>
</body>
</html>
