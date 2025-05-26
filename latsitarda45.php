<?php
$host = 'localhost';
$user = 'latsitarda_user';  // New user
$pass = 'secure_password123'; // New password
$dbname = 'latsitardanus_db';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed");
}

// Parameter rentan SQL injection
$id = $_GET['id'] ?? '';

// 💀 RENTAN: Tidak ada sanitasi input sama sekali
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>File Viewer</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      padding: 20px;
    }
    .search-box {
      margin: 20px 0;
      padding: 10px;
      background: #f0f0f0;
      border-radius: 5px;
    }
    pre {
      background: #f8f8f8;
      padding: 15px;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <h1>File Viewer</h1>
  <div class="search-box">
    <form method="get">
      <label for="id">File ID:</label>
      <input type="text" id="id" name="id" value="<?= htmlspecialchars($_GET['id'] ?? '') ?>">
      <button type="submit">View File</button>
    </form>
  </div>
</body>
</html>