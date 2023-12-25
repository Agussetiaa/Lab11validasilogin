<?php
// Setel informasi database Anda
$database_host = 'localhost';
$database_name = 'lab11';
$database_user = 'root';
$database_password = '';

try {
    // Buat koneksi ke database
    $pdo = new PDO("mysql:host=$database_host;dbname=$database_name", $database_user, $database_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['register'])) {
        // Ambil data dari formulir pendaftaran
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        // Hash password (gunakan password_hash saat menambahkan pengguna baru)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert data ke tabel sesuai peran (admin atau user)
        $tableName = ($role == 'admin') ? 'admin' : 'users';
        $stmt = $pdo->prepare("INSERT INTO $tableName (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $hashedPassword]);

        echo "Registration successful!";
    }
} catch (PDOException $e) {
    echo "Koneksi database gagal: " . $e->getMessage();
}
?>
