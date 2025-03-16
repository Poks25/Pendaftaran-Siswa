<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "tk_pendaftaran";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $sql = "INSERT INTO siswa (nama, usia, alamat, jenis_kelamin) VALUES ('$nama', '$usia', '$alamat', '$jenis_kelamin')";

    if (mysqli_query($conn, $sql)) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
