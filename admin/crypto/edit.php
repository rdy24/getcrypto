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
    <title>GetCrypto | Tambah Crypto</title>
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
        <a href="/admin/crypto" class="active">Crypto</a>
        <a href="/admin/transaction">Transaction</a>
      </div>

      <div class="right_content">
        <div class="navbar">
          <img src="../../assets/images/logo.png" alt="GetCrypto Logo" />
          <button class="btn-logout">Logout</button>
        </div>
        <div class="content">
          <h3>Edit Crypto Item</h3>
          <div class="form-tambah">
            <form action="crypto-proses.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['id'] ?>">
              <input type="hidden" name="photoLama" value="<?= $data['image'] ?>">
              <label for="crypto">Crypto</label>
              <input
                class="input"
                type="text"
                name="crypto"
                id="crypto"
                placeholder="Crypto"
                value="<?= $data['name'] ?>"
              />

              <label for="price">Price</label>
              <input
                class="input"
                type="text"
                name="price"
                id="price"
                placeholder="Price"
                value="<?= $data['price']?>"
              />

              <label for="photo">Photo</label>
              <br>
              <img src="../../img_crypto/<?= $data['image'] ?>" alt="" width="300px">
              <br>
              <input
                type="file"
                name="photo"
                id="photo"
                style="margin-bottom: 20px"
              />

              <button type="submit" class="btn btn-simpan" name="edit">
                Simpan
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
