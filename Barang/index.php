<?php 
require_once "../function.php";

$barang = query("SELECT * FROM barang")[0];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>

    <table border="2" cellspacing="0" cellpadding="3">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Tipe</th>
            <th>Nama</th>
            <!-- <th>Tanggal Masuk</th> -->
            <th>Stok</th>
        </tr>

        <tr>
            <?php foreach($barang as $row) : ?>
                <td><?= $row ?></td>
            <?php endforeach; ?>
        </tr>
    </table>


</body>
</html>