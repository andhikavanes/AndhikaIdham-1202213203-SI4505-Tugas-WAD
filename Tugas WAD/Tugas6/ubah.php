<?php 
require 'function.php';

$plt = $_GET ["KODE"];

$mobil = read("SELECT * FROM data_mobil WHERE KODE = '$plt'")[0];


if (isset( $_POST ["submit"])) {

    if ( ubah ($_POST) > 0 ) {
        echo "
        <script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = '../Tugas1/index.php';
        </script>
        ";
    }else {
        echo mysqli_error($conn);
        // echo "
        // <script>
        //     alert('DATA GAGAL DIUBAH');
        //     document.location.href = '../Tugas1/index.php';
        // </script>
        // ";
        
    }

   
    
 }
    


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
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Tugas1/index.php">
        
        SAFETY COMPUTER
        </a>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="KODE" class="form-label">KODE PRODUK :</label>
                <input type="text" class="form-control" id="KODE" name ="KODE" required>
            </div>
            <div class="mb-3">
                <label for="MODEL" class="form-label">MODEL PRODUK :</label>
                <input type="text" class="form-control" id="MODEL" name ="MODEL" required>
            </div>
            <div class="mb-3">
                <label for="MEREK" class="form-label">MEREK PRODUK :</label>
                <input type="text" class="form-control" id="MEREK" name ="MEREK" required>
            </div>
            <div class="mb-3">
                <label for="HARGA" class="form-label">HARGA :</label>
                <input type="text" class="form-control" id="HARGA" name ="HARGA" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">SUBMIT !</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>