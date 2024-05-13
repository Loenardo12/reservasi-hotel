<?php 
if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    echo
    'nama : ' . $nama.
    '<br>password : ' . $password;
}
?>
