<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'latsitardanus_db';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed");
}

$id = $_GET['id'] ?? '';

// 💀 RENTAN: Tidak ada sanitasi input
$sql = "SELECT * FROM file_rahasia WHERE id = '$id'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . htmlspecialchars($row["nama_file"]) . "</h2>";
        echo "<pre>" . htmlspecialchars($row["isi"]) . "</pre>";
    }
} else {
    echo "No data found.";
}

$conn->close();
?>
