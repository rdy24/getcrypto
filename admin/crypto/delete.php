<?php 
  include '../../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'index.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_crypto WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GetCrypto | Crypto Item</title>
    <link rel="stylesheet" href="../../assets/css/admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <a href="/admin">Home</a>
        <a href="/admin/crypto">Crypto</a>
        <a href="/admin/transaction" class="active">Transaction</a>
      </div>

      <div class="right_content">
        <div class="navbar">
          <img src="../../assets/images/logo.png" alt="GetCrypto Logo" />
          <button class="btn-logout">Logout</button>
        </div>
        <div class="content">
          <h3>Hapus Transaction</h3>
          <div class="form-login">
              <h4>Ingin Menghapus Data ?</h4>
            <form
              action="crypto-proses.php"
              method="post"
            >
            <input type="hidden" name="id" value="<?= $data['id'] ?>">

              <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin-top: 50px;">
                Yes
              </button>
              <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%;">
                No
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>&copy; 2022 GetCrypto. All rights reserved.</p>
    </div>
  </body>
</html>
