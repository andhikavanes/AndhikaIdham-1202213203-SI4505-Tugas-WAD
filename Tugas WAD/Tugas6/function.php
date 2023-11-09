<?php
$conn = mysqli_connect("localhost","root","","tugas_wad");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah($data){
    global $conn;
    $kode = $data ["KODE"];
    $MODEL = $data ["MODEL"];
    $merek = $data ["MEREK"];
    $HARGA = $data ["HARGA"];

    $query = "INSERT INTO data_computer (KODE, MODEL, MEREK, HARGA) VALUES ('$kode','$MODEL','$merek','$HARGA')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;
    $kode = $data ["KODE"];
    $MODEL = $data ["MODEL"];
    $merek = $data ["MEREK"];
    $HARGA = $data ["HARGA"];

    

    $query = "UPDATE data_computer SET
                
                MODEL = '$MODEL',
                MEREK = '$merek',
                HARGA = '$HARGA',
                pemilik = '$pemilik'
            WHERE KODE = '$kode'
    ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
    return var_dump($data);
    
}


?>