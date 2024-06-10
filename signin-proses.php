<?php 
include 'koneksi.php';

if(isset($_POST['signin'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO tb_customer VALUES(NULL, '$email', '$password', '$username')";

    if( empty($username)  || empty($password) || empty($email) ) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'signin.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Registrasi Berhasil Silahkan login');
                window.location = 'login.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'signin.php';
            </script>
        ";
    }
}

?>
