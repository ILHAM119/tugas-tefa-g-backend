<?php
$host     = "localhost";
$username = "root";
$password = ""; 
$database = "smk";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "<h3>Koneksi database berhasil!</h3>";

$sql = "SELECT * FROM anggota";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Nama</th><th>Kelas</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["kelas"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Belum ada data anggota.";
}

$conn->close();
?>
