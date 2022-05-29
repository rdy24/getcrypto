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
          <h3>Transaction</h3>
          <button type="button" class="btn btn-tambah">
            <a href="create.php">Tambah Data</a>
          </button>
          <table class="table-data">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Crypto Item</th>
                <th>Harga</th>
                <th>Tanggal</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                include '../../koneksi.php';
                $sql = "SELECT * FROM tb_transaction";
                $result = mysqli_query($koneksi, $sql);
                while($data = mysqli_fetch_assoc($result)) {
                  echo "
                  <tr>
                    <td>$data[nama_admin]</td>
                    <td>$data[crypto_item]</td>
                    <td>$data[harga]</td>
                    <td>$data[tanggal]</td>
                    <td><a href=edit.php?id=$data[id]>Edit</a> | 
                    <a href=delete.php?id=$data[id]>Hapus</a></td>
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
