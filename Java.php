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
    <title>JavaScript di PHP</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 20px; 
            background: #f4f4f4;
            text-align: center;
        }
        .container {
            max-width: 600px; 
            margin: auto; 
            padding: 20px; 
            background: white; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
            border-radius: 5px;
        }
        table {
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px;
        }
        th, td {
            padding: 10px; 
            border: 1px solid #ddd; 
            text-align: left;
        }
        th {
            background: green; 
            color: white;
        }
        button {
            background: blue; 
            color: white; 
            padding: 10px; 
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background: darkblue;
        }
    </style>
    <script>
        function showAlert() {
            alert("Selamat datang di halaman daftar siswa!");
        }
    </script>
</head>
<body onload="showAlert()">
    <div class="container">
        <h2>Daftar Siswa</h2>
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
        <button onclick="showAlert()">Klik Saya</button>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>