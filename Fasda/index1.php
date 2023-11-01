<?php
require "koneksi.php";

$result = mysqli_query($conn, "select * from item");

$mahasiswa = [];

while ($row = mysqli_fetch_assoc($result)) {
    $mahasiswa[] = $row;
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

        .container {
            background-color: black;
            color: #f4f4f4;
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }

        table th {
            background: #007BFF;
            color: #fff;
        }

        table tr:nth-child(even) {
            background: #f2f2f2;
        }

        table img {
            width: 100px;
             height: 80px;
        }

        a {
            text-decoration: none;
            color: #007BFF;

        }

        a:hover {
            text-decoration: underline;
        }
        content {
            background: #007BFF;
            color: #fff;
            padding: 120px;
            width: 100px;
             height: 80px;
            
        }
        .menu {
            text-align: center;
            background: black;
            padding: 10px;
            list-style: none;
            margin-top: 10px;
        }
        .nav-item {
            display: inline;
            margin-right: 20px;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
            border: 2px solid;
        }
        
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        .nav-item a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s;
        }
        .nav-item a:hover {
            color: #ff6600;
        }
    
        
    </style>
</head>
<body>
    <div class="content">       
      <ul class="menu">  
           <li class="nav-item"><a href="tambah.php">Tambah Item</a></li>
           <li class="nav-item"><a href="indexx.php">Kembali Ke Beranda</a></li>       
       </ul>    
    </div>
       
    <div class="container">
        <h1>Data Item</h1>
    </div>
    <table>
        <tr>
            <th>No</th>
            <th>Jenis Item</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $mhs["Jenis_Item"] ?></td>
                <td><?= $mhs["Nama_Item"] ?></td>
                <td><img src="img/<?= $mhs['Gambar'] ?>" alt="ini gambar"></td>
                <td><a href="edit.php?id=<?= $mhs["ID_Item"]; ?>">Edit</a></td>
                <td><a href="hapus.php?id=<?= $mhs["ID_Item"]; ?>" onclick="return confirm('Apa Anda Yakin ingin menghapus data ini ?">Hapus</a></td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table>
</body>
</html>