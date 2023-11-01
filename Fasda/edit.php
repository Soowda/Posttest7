<?php
require "koneksi.php";
$id = $_GET["id"];

$result = mysqli_query($conn, "select * from Item where ID_Item = '$id'");

$Item = [];

while ($row = mysqli_fetch_assoc($result)) {
    $Item[] = $row;
}

$Item = $Item[0];

if (isset($_POST["ubah"])) {
    $nama = $_POST["Nama_Item"];
    $Jenis = $_POST["Jenis_Item"];

    $Gambar = $_FILES['Gambar']['name'];
    $explode = explode('.', $Gambar);
    $ekstensi = strtolower(end($explode));
    $Gambar_baru = "$nama.$ekstensi";
    $tmp = $_FILES['Gambar']['tmp_name'];

    if (move_uploaded_file($tmp, 'img/' . $Gambar_baru)) {
        $result = mysqli_query($conn, "update Item set  Nama_Item = '$nama', Jenis_Item = '$Jenis', Gambar = '$Gambar_baru' where ID_Item = '$id'");

    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo "
            <script>
            alert('Data Gagal Diubah!');
            </script>
        ";
    }
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
            <h2>Ubah Data</h2>
            <label for="Nama_Item">Nama :</label>
            <input type="text" name="Nama_Item" id="Nama_Item" value="<?=$Item["Nama_Item"] ?>">
            <label for="Jenis_Item">Jenis Item:</label>
            
            <input type="radio" name="Jenis_Item" id="Sword" value="Sword" <?= $Item['Jenis_Item'] == "Sword" ? "checked" : "" ?>> Sword
            <input type="radio" name="Jenis_Item" id="Bow" value="Bow" <?= $Item['Jenis_Item'] == "Bow" ? "checked" : "" ?>> Bow
            <input type="radio" name="Jenis_Item" id="Gun" value="Gun" <?= $Item['Jenis_Item'] == "Gun" ? "checked" : "" ?>> Gun
            <input type="radio" name="Jenis_Item" id="ROD" value="ROD" <?= $Item['Jenis_Item'] == "ROD" ? "checked" : "" ?>> ROD
            <input type="radio" name="Jenis_Item" id="FLAILS" value="FLAILS" <?= $Item['Jenis_Item'] == "FLAILS" ? "checked" : "" ?>> FLAILS
            <label for="Gambar">Upload Gambar:</label>
            <input type="file" name="Gambar" id="Gambar">
            <button type="submit" name="ubah">Ubah</button>
        </form>
        <a href="index1.php">Kembali ke home</a>
    </div>
</body>
</html>
