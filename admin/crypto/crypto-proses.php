<?php 
if(isset($_POST['simpan'])) {
    $crypto = $_POST['crypto'];
    $price = $_POST['price'];

    echo
    'Crypto : ' . $crypto . 
    '<br> Price : ' . $price ; 
}
?>
