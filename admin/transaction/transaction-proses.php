<?php 
include '../../koneksi.php';

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $crypto = $_POST['crypto'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO tb_transaction VALUES(NULL, '$nama', '$crypto', '$harga', '$tanggal')";

    if(empty($nama) || empty($crypto) || empty($harga) || empty($tanggal)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'create.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Data Transaction Berhasil Ditambahkan');
                window.location = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'create.php';
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id     = $_POST['id'];
    $nama   = $_POST['nama'];
    $crypto  = $_POST['crypto'];
    $harga  = $_POST['harga'];
    $tanggal= $_POST['tanggal'];

    $sql = "UPDATE tb_transaction SET
            nama_admin = '$nama', 
            crypto_item = '$crypto', 
            harga = '$harga', 
            tanggal = '$tanggal'
            WHERE id = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Transaction Berhasil Diubah');
                window.location = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_transaction WHERE id = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Transaction Berhasil Dihapus');
                window.location = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Transaction Gagal Dihapus');
                window.location = 'index.php';
            </script>
        ";
    }
}else {
    header('location: index.php');
}

?>
