<?php 
include '../koneksi.php';

function upload() {
    $namaFile = $_FILES['photo']['name'];
    $error = $_FILES['photo']['error'];
    $tmpName = $_FILES['photo']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "
            <script>
                alert('Gambar Harus Diisi');
                window.location = 'reservasi-entry.php';
            </script>
        ";

        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstentiGambarValid)) {
        echo "
            <script>
                alert('File Harus Berupa Gambar');
                window.location = 'reservasi-entry.php';
            </script>
        ";

        return null;
    }

    // lolos pengecekan, upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    $oke =  move_uploaded_file($tmpName, '../img_reservasi/' . $namaFileBaru);
    return $namaFileBaru;

}

if(isset($_POST['simpan'])) {
    $reservasi = $_POST['reservasi'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $photo = upload();

    if(!$photo) {
        return false;
    }
    var_dump($photo, $reservasi, $price, $description);

    $sql = "INSERT INTO tb_reservasi VALUES(NULL, '$photo', '$reservasi', '$price','$description')";

    if(empty($reservasi) || empty($price)|| empty($description)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'reservasi-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data reservasi Berhasil Ditambahkan');
                window.location = 'reservasi.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'reservasi-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id         = $_POST['id'];
    $reservasi = $_POST['reservasi'];
    $price      = $_POST['price'];
    $description = $_POST['description'];
    $photoLama = $_POST['photoLama'];

    // cek apakah user pilih gambar atau tidak
    if($_FILES['photo']['error']) {
        $photo = $photoLama;
    }else {
        // foto lama akan dihapus dan diganti foto baru
        unlink('../img_reservasi/' . $photoLama);
        $photo = upload();
    }

    $sql = "UPDATE tb_reservasi SET 
            photo = '$photo',
            reservasi = '$reservasi',
            price = '$price',
            description = '$description'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data reservasi Berhasil Diubah');
                window.location = 'reservasi.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'reservasi-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus gambar
    $sql = "SELECT * FROM tb_reservasi WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $photo = $row['photo'];
    unlink('../img_reservasi/' . $photo);
    

    $sql = "DELETE FROM tb_reservasi WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data reservasi Berhasil Dihapus');
                window.location = 'reservasi.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data reservasi Gagal Dihapus');
                window.location = 'reservasi.php';
            </script>
        ";
    }
}else {
    header('location: reservasi.php');
}
