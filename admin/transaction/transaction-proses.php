<?php 
if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jenis = $_POST['crypto'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tgl'];

    echo
    'Nama : ' . $nama . 
    '<br> Crypto Item : ' . $crypto .
    '<br> Harga : ' . $harga . 
    '<br> Tanggal : ' . $tanggal;
}

?>