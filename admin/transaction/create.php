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
          <h3>Input Transaction</h3>
          <div class="form-tambah">
            <form action="transaction-proses.php" method="POST">
              <label for="nama">Nama</label>
              <input
                class="input"
                type="text"
                name="nama"
                id="nama"
                placeholder="Nama"
              />

              <label for="crypto">Crypto</label>
              <input
                class="input"
                type="text"
                name="crypto"
                id="crypto"
                placeholder="Crypto"
              />

              <label for="harga">Harga</label>
              <input
                class="input"
                type="text"
                name="harga"
                id="harga"
                placeholder="Harga"
              />

              <label for="tanggal">Tanggal</label>
              <input
                class="input"
                type="date"
                name="tanggal"
                id="tanggal"
                style="margin-bottom: 20px"
              />

              <button type="submit" class="btn btn-simpan" name="simpan">
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
