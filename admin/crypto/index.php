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
        <a href="/admin/crypto" class="active">Crypto</a>
        <a href="/admin/transaction">Transaction</a>
      </div>

      <div class="right_content">
        <div class="navbar">
          <img src="../../assets/images/logo.png" alt="GetCrypto Logo" />
          <button class="btn-logout">
            <a href="../../logout.php">Logout</a>
          </button>
        </div>
        <div class="content">
          <h3>Crypto Item</h3>
          <button type="button" class="btn btn-tambah">
            <a href="create.php">Tambah Data</a>
          </button>
          <button type="button" class="btn">
            <a href="crypto-cetak.php">Cetak</a>
          </button>
          <table class="table-data">
            <thead>
              <tr>
                <th>Item</th>
                <th>Photo</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                include '../../koneksi.php';
                $sql = "SELECT * FROM tb_crypto";
                $result = mysqli_query($koneksi, $sql);
                while($data = mysqli_fetch_assoc($result)) {
                  echo "
                    <tr>
                      <td>
                        <img src='../../img_crypto/$data[image]' width='300px'>
                      </td>
                      <td>$data[name]</td>
                      <td>$data[price]</td>
                      <td>
                        <a href=edit.php?id=$data[id]>Edit</a> | 
                        <a href=delete.php?id=$data[id]>Hapus</a>
                      </td>
                    </tr>
                  ";
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>&copy; 2022 GetCrypto. All rights reserved.</p>
    </div>
  </body>
</html>
