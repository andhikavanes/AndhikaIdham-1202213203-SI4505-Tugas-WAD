<?php
require 'function.php';

$computer = query("SELECT * FROM data_computer");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAFETY COMPUTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        
        SAFETY COMPUTER
        </a>
    </div>
    </nav>
    <div class="container text-center pt-3">
        <h2>KATALOG LAPTOP SAFETY COMPUTER</h2>
    </div>
    <div class="container pt-4">
            <table class="table table-success table-striped">
            <tr class="">
                <th>NO </th>
                <th>KODE </th>
                <th>MODEL</th>
                <th>MEREK</th>
                <th>HARGA</th>  
                <th></th>
            </tr>
            <tr>
                <?php $i = 1; ?>
                <?php foreach ($computer as $row) : ?>
            </tr>
            <tr>
                <td class=""><?= $i; ?></td>
                <td><?= $row ["KODE"];?></td>
                <td><?= $row ["MODEL"];?></td>
                <td><?= $row ["MEREK"];?></td>
                <td><?= $row ["HARGA"];?></td>
                <td><a class="btn btn-secondary" href="../Tugas7/ubah.php?KODE=<?=$row ["KODE"];?>" role="button">UBAH</a> <a class="btn btn-secondary" href="../Tugas5/hapus.php?KODE=<?= $row ["KODE"];?> " role="button" onclick="return confirm('APAKAH ANDA YAKIN?')">HAPUS</a></td>
               

            </tr>
            <?php $i++; ?>
            <?php endforeach;?>
        </table>
    </div>
    <div class="container text-center">
        <a class="btn btn-secondary btn-lg" href="../Tugas3/tambah.php" role="button">TAMBAH DATA</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
