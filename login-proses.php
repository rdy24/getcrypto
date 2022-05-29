<?php 

include 'koneksi.php';
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM tb_admin WHERE email = '$email'";
    list($id,$email, $username, $name, $password) = mysqli_fetch_row(mysqli_query($koneksi, $sql));
    $result = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($result) > 0) {
        if (password_verify($pass, $password)) {
          while($row = mysqli_fetch_assoc($result)) {
              session_start();
              $_SESSION['nama'] = $row['nama'];
              header('location:admin/index.php');
          }
        }
    }else { 
       echo "
       <script>
        alert('email atau password anda salah, Silahkan coba lagi');
        window.location = 'login.php';
       </script>
       ";
    }
}

?>
