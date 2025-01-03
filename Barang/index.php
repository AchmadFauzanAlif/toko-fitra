<?php 
require_once "../function.php";

$barang = query("SELECT * FROM barang");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/styleBarang.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container ">
            <img src="" alt="Logo Toko">
            Fitra Cell
            <div class="collapse navbar-collapse" >
                <ul class="navbar-nav mx-auto">
                    <li class="navbar-item">
                        <a href="../index.php" class="btn btn-warning ">Home</a>
                    </li class="navbar-item">
                    <li class="navbar-item">
                        <a href="" class="btn btn-warning">Transaksi</a>
                    </li class="navbar-item">
                    <li class="navbar-item">
                        <a href="" class="btn btn-warning">Laporan</a>
                    </li class="navbar-item">
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <button class="btn btn-dark dropdown-toggle">
                            <span>Menu</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="" class="nav-link">Profile</a></li>
                            <li class="dropdown-item bg-danger"><a href="" class="nav-link">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>   

    <div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center  ">
        <a class="btn btn-primary mb-3 text-end" href="tambahBarang.php">Tambah Barang</a>
        <form class="d-flex">
            <input type="text" class="form-control me-2" placeholder="Cari Barang">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Tipe</th>
                    <th>Nama</th>
                    <th>Stok</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach($barang as $row) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['kode-barang']; ?></td>
                    <td><?= $row['tipe-barang']; ?></td>
                    <td><?= $row['nama-barang']; ?></td>
                    <td><?= $row['stok-barang']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>