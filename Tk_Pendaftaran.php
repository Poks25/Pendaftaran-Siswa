<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "tk_pendaftaran";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM siswa";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa Terdaftar</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 20px; 
            background: url('background.jpg') no-repeat center center fixed; 
            background-size: cover; 
        }
        .container { 
            max-width: 600px; 
            margin: auto; 
            padding: 20px; 
            background: rgba(255, 255, 255, 0.9); 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
            border-radius: 5px; 
        }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: green; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Siswa Terdaftar</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
            </tr>
            <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['usia']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['jenis_kelamin']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>